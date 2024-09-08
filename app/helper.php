<?php
use Illuminate\Http\Request;
function saveFile(Request $request,$input)
{
    $file = $request->file($input);
    $ext = $file->extension();
    $filename = now()->timestamp.Str::random(20).'.'.$ext;

    $path = 'uploads'.date('/y') . '/' . date('m') . '/';
    $filePath = $path.$filename;
   
    $file->move('storage/uploads'.date('/y') . '/' . date('m') . '/',$filename);
    // Storage::put($filePath, file_get_contents($file));

    return Storage::url($filePath);
}
function unique($table,$col,$val,$id,$id1)
{
    $uni=DB::table($table)->WHERE($col,$val)->count($col);
    $uni2=DB::table($table)->WHERE($id,$id1)->first();

    if($uni2->$col==$val){
      return $uni-1;
    }
    else
      return $uni;
}
function dateFormatconverter($date)
{
  if($date==null)
  {
    return '';
  }
    $phpdate = strtotime($date);
    return date("d, M Y", $phpdate);
}
function timeFormatconverter($date)
{
  if($date==null)
  {
    return '';
  }
    $phpdate = strtotime($date);
    return date("d M H:i", $phpdate);
}
function activices($page,$type)
{
  DB::table('activices')->insert([
    'user_id'=>session('id'),
    'page'=>$page,
    'type'=>$type,
    'ip'=>0,
    'cdt'=>now()

  ]);
}
function user($id)
{
 $user= DB::table('admin')->where('id',$id)->first();
  return $user->name;
}
function users()
{
  return DB::table('users')->first();
}
function setting()
{
  $footer=DB::table('cms')->where('id',1)->first();
  return $footer;
}
function andelar($id){
  $andelars=DB::table('sub_andelar')->where('andelar',$id)->where('status',1)->get();
  return $andelars;
}
function table($table,$col,$id,$col1)
{
  $name=DB::table($table)->where($col,$id)->first();
  if($name==null)
  return '';
else  
 return $name->$col1;
}
function clients(){
  $clients=DB::table('client')->where('status',1)->get();
  return $clients;
}
function  cat($col)
{
  return DB::table('news')->where('news_category',$col)->get();
}