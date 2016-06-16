<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use DB,Input;
class MeetingController extends Controller
{
	// 添加会议
	public function add_meeting()
	{
		return view('admin/form');
	}
	// 会议列表
	public function meeting_list()
	{
		return view('admin/form');
	}
	// 添加会议室
	public function add_meeting_room()
	{
		return view('admin/form');
	}
	// 会议室列表
	public function meeting_room_list()
	{
		return view('admin/form');
	}
}