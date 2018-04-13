<?php


 
// ملاحظة هامة :
// الاشارة السالة في البرمجةتعود للوراء

// يمكن ان تفعل الكثير من الوظائف في النصوص 
// == تفكيك وتركيب النصوص الى مصفوفات 
// explodeحسب الفاصلة  implode
//  str_split حسب عدد الاحرف 
//  chunk_split تقطيع حسب العدد الذي تريده ويمكن ان تضع اي شيء بين القطع

// == استبدال كلمة بكلمة مصفوفة بمصفوفة ومصفوفة بكلمة
// replace 
// == تكرار خلط معرفة الطول
// str_repeat str_shuffle strlen
// ==اضافة وازالة هذه الاشارة /
// addSlashes  stripslashes
// من اجل الاحماية 
// == ازالة التاغات من اجل الحماية 
// strip_tags
// ==  StrToLower StrToUpper
// == تقطيع تتريم trim
// ==حساب عدد الكلمات 0
// حساب عدد الكلمات بالنص بمصفوفة احادية 1
// حساب عدد الكلمات بمصفوفة ثنائية بحساب بداية الكلمات 2
// str_word_count
//  ==تحليل النص الى مصفوفة     
// parse_str
// (name=amjad&&age=12.....)
// ==تحويل امر السطر الجديد الى تاغات 
//  nl2br ==> New Line To Break Tag ==> \n => <br/>
//  == معرفة مكان الكلمة من النص والبحث عنه من المكان الذي تريده
//  strpos
//  stripos  i=insensitive
//  strrpos  r=right
//  strripos
//  == بحث عن نص داخل نص 
//  strstr false--> الكلمة المرادة وما بعدها 
//         true--> كل ماقبل الكلمة المرادة
//  stristr i=insensitive
//  strchr alias functions
//  ==مقارنة بين النصوص  
//  0 =متساوي   1 =زائد عنه بحرف   2=ناقص عنه بحرف 
//  strcmp         cmporse
//  ==معاكسة الننصوص
//  strrev         revarse
//  ==  استخراج نص من نص تعيين البداية والعدد المراد اقتطاعه
//  substr 
 $rest = substr("abcdef", 0, -1);  // returns "abcde"
$rest = substr("abcdef", 2, -1);  // returns "cde"
$rest = substr("abcdef", 4, -4);  // returns false
$rest = substr("abcdef", -3, -1); // returns "de"
?>