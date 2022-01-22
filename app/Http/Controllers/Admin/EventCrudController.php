<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use App\Mail\EventBooked;
use App\Models\Event;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\UnauthorizedException;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event');
        CRUD::setEntityNameStrings('event', 'events');
        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
     
        CRUD::column('id');
        CRUD::column('image');
        CRUD::column('name');
        CRUD::column('location');
        CRUD::column('date');
        CRUD::column('start');
        CRUD::column('description');
        CRUD::column('price');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(EventRequest::class);
       // CRUD::field('id');
        CRUD::field('name');
        CRUD::field('image');
        CRUD::field('description');
        CRUD::field('location');
        CRUD::field('date');
        CRUD::field('price');
        
        // CRUD::field('created_at');
        // CRUD::field('updated_at');
        

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    private function getFieldsData(){
        return [
         [
             'name'=>'name',
             'label'=>'Name',
             'type'=>'text'
         ],
         [
           'name'=>'image',
           'label'=>'ImageUrl',
           'type'=>'text'
         ],
         [
            'name'=>'description',
            'label'=>'Description',
            'type'=>'text'
         ],
         [
             'name'=>'date',
             'label'=>'Date',
             'type'=>'date'
         ],
         [
             'name'=>'location',
             'label'=>'Location',
             'type'=>'text'
         ],
         [
             'name'=>'sport_id',
             'label'=>'Sport',
             'type'=>'select',
             'model'=>'App\Models\Sport',
             'attribute'=>'name',
             'entity'=>'sport'
         ],
         [
            'name'=>'price',
            'label'=>'Price',
            'type'=>'number',
            
         ],
         [
            'name'=>'start',
            'label'=>'Start',
            'type'=>'time',
         ]

        ];
    }
    protected function setupShowOperation()
    {
    // by default the Show operation will try to show all columns in the db table,
    // but we can easily take over, and have full control of what columns are shown,
    // by changing this config for the Show operation
    $this->crud->set('show.setFromDb', false);
    $this->crud->addColumns($this->getFieldsData(TRUE));
    }

    public function allEvents(){
        
        if (!auth()->user()) {
            return abort('401','Unathorized action!');
        }

        $user = auth()->user();
       // Mail::to($user)->send(new EventBooked($user,$eve));
        
        $events = Event::paginate(3);
        
        return view('events.events',[
            "events"=>$events
        ]);
    }


    public function show($id){

        $event=Event::find($id);
        return view('events.show');
    }

    public function search(){

        if (!auth()->user()) {
            return abort('401','Unathorized action!');
        }

        
       $searchTerm= request()->query('query');
         if($searchTerm){

            $events=Event::where('name','LIKE',"%{$searchTerm}%")->paginate(3);
            
         
            //dd(request()->query('query'));
         }
         else{
             $events= Event::simplePaginate(3);
         }

         return view('events.events')->with('events',$events);
        

        
        
        
    }

    
}
