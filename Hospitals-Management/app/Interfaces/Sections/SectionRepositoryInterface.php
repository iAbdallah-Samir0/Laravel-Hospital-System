<?php

namespace App\Interfaces\Sections;


interface SectionRepositoryInterface
{

   // Get All Sections
    public function index();

    //sort sections
    public function store($request);


    //update sections
    public function update($request);


    //Delete sections
    public function destroy($request);
}

