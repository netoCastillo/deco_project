<?php

use App\Note;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteTest extends TestCase
{

	


    public function test_notes_list()
    {

    	//Having
		Note::create(['note' => 'My first note']);
		Note::create(['note' => 'Second note']);

    	//When
        $this->visit('notes')
        //then
        ->see('My first Note')
        ->see('Second Note');
    }
}
