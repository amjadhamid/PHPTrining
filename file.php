<!-- اولا للتاكد من وجود النص او امكانيته للقراءة

== File_exist
is_writable

==صناعةة الااتجاه وحذفه والتاكد منه 
mkdir RmDir Is_Dir

==الااتجاه الذي فيه الملف واسمه بدون الللاحقة
dirname 
Basename

==وضع محتويات لملف بالمود الذي تريده 
file_put_content(file , data , mode , context)
FILE_APPEND ---
LOCK_EX    --- EXLOSIVE  حصري حتى لا يكتب شخص اخر معك بنفس الوقت 
FILE_USE_INCLUE_PATH ---

== احضار محتويات والتحكم بما ستقرأه
file_get_content(path , include_path ,, context , offset , max_length)


== اعادة تسمية ونسخ لاي اتجاه تريده
ٌrename (oldname , newname , context)
copy (oldname , newname )
copy (__FILE__, __DIR__ . '///');

==معلومات عن الملف للشروط وغيره
pathinfo (path , options)

==حذف للملف او ازالته اذا اصبح شرط معين 
RmDir  Unlink(path)

==شرح خاصية Scandir لعمل فحص لمحتوى المجلدات و عرض ما بها

scndir (dir , sort , context)
exs:
foreach($fiels as $ file ){
if (is_file(__DIR__. '/osama/' . $file))
unlink(__DIR__. '/osama/' . $file)
}


==معرفة حجم النصوص  
 filesize()
 
 
 
 ==  تفتح النصوص
fopen(filename , mode , include_path , context)
mode  + يكتب ويقرأ
  يجب تواجده   r    تقرا من اول
     r+   تقرا ةتكتب من اول
     w   وتنشأ من اول تكتب و تحذف لمحتوى الاصلي 
     w+     وتنشأ من اول تكتب وتقرا من اول المحتوى 
 append    a     تكتب وتنشأ من اول ولا تحذف المحتوى 
     a+    تكتب وتقرا وتنشأ من اول ولا تحذف المحتوى 
  يجب الايتواجد   x     يكتب ويوجد ملف جديد واذا كان موجود يصدر خطأ
     x+
 ==  بالحجم الذي تريده -ثم-قراءة النصوص 
 fopen (Handle , length)

==ثم الكتابة على النصوص 
fwrite(handle , string , length)

== ثم يفتش عن الذي تريده 
fseek(handle , offset , whence)
whence = {SEEK_SET =DEFAULT}, {SEEK_CUR }{SEEK_END}, 


== واخيرا يغلق المجلد 
fclose 





 -->
<?php











































// if (File_exists(__DIR__ . '/php')) 
//     echo "sorry this Directory Is Exists";
// else {
//     mkdir(__DIR__ . '\PHP');
// }

// $directory =  __DIR__ . '/PHP/';

// echo $directory;

// file_put_contents($directory . 'text.php' , "hello");


// $file = $directory.'text.php';


// chmod ( $file , 0444 ) ; 

// if(is_writable($file)){
//     file_put_contents($file , "hello");    
// }else{
//     chmod($file , 0755);
//     file_put_contents($file , "testing");    

// }

// include $file;