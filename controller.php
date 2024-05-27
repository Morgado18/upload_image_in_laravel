Colocar o 

enctype="multipart/form-data"

/*============ CONTROLLER ==============*/

if($request->hasFile('img') && $request->file('img')->isValid()){
  $img = $request->img;
  $extension_img = $img->extension();
  $name_img = sha1($img->getClientOriginalName().strtotime('now')).'.'.$extension_img;
  $request->img->move(public_path('imgs/'),$name_img);
  $dados[''profile_photo_path] = $name_img;
}

