<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertOrUpdate(array $rows){
    $table = \DB::getTablePrefix().with(new self)->getTable();


    $first = reset($rows);

    $columns = implode( ',',
        array_map( function( $value ) { return "$value"; } , array_keys($first) )
    );

    $values = implode( ',', array_map( function( $row ) {
            return '('.implode( ',',
                    array_map( function( $value ) { return '"'.str_replace('"', '""', $value).'"'; } , $row )
                ).')';
        } , $rows )
    );

    $updates = implode( ',',
        array_map( function( $value ) { return "$value = VALUES($value)"; } , array_keys($first) )
    );

    $sql = "INSERT INTO {$table}({$columns}) VALUES {$values} ON DUPLICATE KEY UPDATE {$updates}";

    return \DB::statement( $sql );
}
    public function index()
    {
        this.insertOrUpdate([
      ['id'=>1,'flavor'=>'choc'], ['id'=>2,'value'=>60]
     ]);
        return view('home');
    }
    /**
     * Mass (bulk) insert or update on duplicate for Laravel 4/5
     *

     *
     *
     * @param array $rows
     */

}
