<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Project;

class JointableController extends Controller
{
    function index()
    {
    	$data = Project::join('progress', 'progress.project_id', '=', 'project.project_id')
              		->join('constarution', 'constarution.project_id', '=', 'project.project_id')
              		->get(['progress.fmProgress', 'constarution.desingBy', 'project.project_name',
                      'project.buildingSum', 'constarution.status']);

       	/*Above code will produce following query

        Select
        	`country`.`country_name`,
        	`state`.`state_name`,
        	`city`.`city_name`
        from `country`
        inner join `state`
        	on `state`.`country_id` = `country`.`country_id`
        inner join `city`
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('join_table', compact('data'));
    }
}

?>
