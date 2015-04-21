<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbNew;
use App\HbAuction;
use App\HbAsa;

use App\HbAttachment;
use Laracasts\Flash\Flash;

use App\HbBanner;
class HbBatchDestroyController extends Controller {

	// destroy news

	public function deleteNews(Request $request)
	{
		if($request->has('ids')){
			HbNew::destroy($request->input('ids'));
			Flash::success('新闻删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条新闻');
		return redirect()->back();
	}

	public function deleteAuctions(Request $request)
	{
		if($request->has('ids')){
			HbAuction::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}

	public function deleteAsas(Request $request)
	{
		if($request->has('ids')){
			HbAsa::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}
	public function deleteBanners(Request $request)
	{
		if($request->has('ids')){
			HbBanner::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}

	public function deleteAttachments(Request $request)
	{
		if($request->has('ids')){
			HbAttachment::destroy($request->input('ids'));
			return response()->json(['success'=>'true']);
		}else{
			return response()->json(['success'=>'false','msg'=>'未输入删除附件ID']);
		}
	}
}