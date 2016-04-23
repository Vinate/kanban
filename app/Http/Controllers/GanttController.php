<?php
/**
 * Created by PhpStorm.
 * User: DNOJ
 * Date: 4/19/2016
 * Time: 11:24 PM
 */
namespace App\Http\Controllers;
use App\Models\Board;
use App\Models\Color;
use App\Models\Member;
use App\Models\Membermanagement;
use App\Models\Card;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Checklist;
use DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Input;
use Validator;
date_default_timezone_set('Asia/Bangkok');

class GanttController extends Controller
{

   public function getGantt($id){

       $Board = Board::all()
           ->find($id);

       return  view('pages.gantt.ganttChart')
           ->with('Board', $Board);
   }
}