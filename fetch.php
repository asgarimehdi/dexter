<?php
function Fetch($id)
{
	//$url='https://www.darukade.com/Products/DAK-1365';
	$url="http://www.darukade.com/Products/DAK-".$id;
	$content=Curl($url);
	$content=strip_tags($content,'<title><div><h3><img><a>');
////////////////// title:
	$pars1='<title>';
	$pars2='</title>';
	$title=slice($content,$pars1,$pars2);
	$title1=explode('-',$title);
	$title_en=trim($title1[1]);
	$title_fa=trim($title1[0]);
	$title=trim($title);
////////////////// new content sliced:
	$pars1='<div class="DefaultDiv46">مشخصات عمومی</div>';
	$pars2='<div class="DefaultDiv46">اطلاعات کاربردی</div>';
	$new_content=slice($content,$pars1,$pars2);
///////////////
////////////////// barcode:
	$pars1='<div class="DefaultDiv50">بارکد</div>';
	$pars2='</div>';
	$barcodes=slice($content,$pars1,$pars2);
	$barcodes=explode('</a>',$barcodes);
	$barcode=trim(strip_tags($barcodes[0]));
	$barcode2=trim(strip_tags($barcodes[1]));
	$barcode3=trim(strip_tags($barcodes[2]));
///////////////
////////////////// noe mahsol:
	$pars1='<div class="DefaultDiv50">نوع محصول</div>';
	$pars2='</div>';
	$type=slice($new_content,$pars1,$pars2);
	$type=trim(strip_tags($type));
///////////////
////////////////// jensiat mahsol:
	$pars1='<div class="DefaultDiv50">جنسیت مصرف</div>';
	$pars2='</div>';
	$sex=slice($new_content,$pars1,$pars2);
	$sex=trim(strip_tags($sex));
///////////////
////////////////// size:
	$pars1='<div class="DefaultDiv50">سایز</div>';
	$pars2='</div>';
	$size=slice($new_content,$pars1,$pars2);
	$size=trim(strip_tags($size));
///////////////
////////////////// tedad dar baste:
	$pars1='<div class="DefaultDiv50">تعداد در بسته</div>';
	$pars2='</div>';
	$unit=slice($new_content,$pars1,$pars2);
	$unit=trim(strip_tags($unit));
///////////////
////////////////// expire:
	$pars1='<div class="DefaultDiv50">مدت انقضا</div>';
	$pars2='</div>';
	$expire=slice($new_content,$pars1,$pars2);
	$expire=trim(strip_tags($expire));
///////////////
////////////////// company:
	$pars1='<div class="DefaultDiv50">شرکت سازنده</div>';
	$pars2='</div>';
	$company=slice($new_content,$pars1,$pars2);
	$company=trim(strip_tags($company));
///////////////
////////////////// code behdashti:
	$pars1='<div class="DefaultDiv50">کد بهداشتی</div>';
	$pars2='</div>';
	$code=slice($new_content,$pars1,$pars2);
	$code=trim(strip_tags($code));
///////////////
////////////////// site:
	$pars1='<div class="DefaultDiv50">سایت</div>';
	$pars2='</div>';
	$site=slice($new_content,$pars1,$pars2);
	$site=trim(strip_tags($site));
///////////////
////////////////// group:
	$pars1='<div class="DefaultDiv50">گروه</div>';
	$pars2='</div>';
	$group=slice($new_content,$pars1,$pars2);
	$group=trim(strip_tags($group));
///////////////
////////////////// place:
	$pars1='<div class="DefaultDiv50">محل مصرف</div>';
	$pars2='</div>';
	$place=slice($new_content,$pars1,$pars2);
	$place=trim(strip_tags($place));
///////////////
////////////////// noe mahfaze:
	$pars1='<div class="DefaultDiv50">نوع محفظه</div>';
	$pars2='</div>';
	$enclosure=slice($new_content,$pars1,$pars2);
	$enclosure=trim(strip_tags($enclosure));
///////////////
////////////////// age:
	$pars1='<div class="DefaultDiv50">سن مصرف</div>';
	$pars2='</div>';
	$age=slice($new_content,$pars1,$pars2);
	$age=trim(strip_tags($age));
///////////////
////////////////// mavared:
	$pars1='<div class="DefaultDiv163">موارد مصرف :</div>';
	$pars2='</div>';
	$mavared=slice($content,$pars1,$pars2);
	$mavared=trim(strip_tags($mavared));
///////////////
////////////////// ravesh:
	$pars1='<div class="DefaultDiv163">روش مصرف :</div>';
	$pars2='</div>';
	$ravesh=slice($content,$pars1,$pars2);
	$ravesh=trim(strip_tags($ravesh));
///////////////
////////////////// moshakhase:
	$pars1='<div class="DefaultDiv163">مشخصه ها :</div>';
	$pars2='</div>';
	$moshakhase=slice($content,$pars1,$pars2);
	$moshakhase=trim(strip_tags($moshakhase));
///////////////
////////////////// tozih:
	$pars1='<div class="DefaultDiv163">توضیحات :</div>';
	$pars2='</div>';
	$tozih=slice($content,$pars1,$pars2);
	$tozih=trim(strip_tags($tozih));
///////////////
////////////////// hoshdar:
	$pars1='<div class="DefaultDiv163">هشدار مصرف :</div>';
	$pars2='</div>';
	$hoshdar=slice($content,$pars1,$pars2);
	$hoshdar=trim(strip_tags($hoshdar));
///////////////
////////////////// sharayet:
	$pars1='<div class="DefaultDiv163">شرایط نگهداری :</div>';
	$pars2='</div>';
	$sharayet=slice($content,$pars1,$pars2);
	$sharayet=trim(strip_tags($sharayet));
///////////////
////////////////// tarkibat:
	$pars1='<div class="DefaultDiv163">ترکیبات';
	$pars2='<div class="DefaultDiv163">';
	$tarkibat=slice($content,$pars1,$pars2);
	$tarkibat=trim(strip_tags($tarkibat));
///////////////
////////////////// brand:
	$pars1='<div id="ContentPlaceHolder1_ObjBrandName" class="DefaultDiv17">';
	$pars2='</div>';
	$brand=slice($content,$pars1,$pars2);
	$brand=trim(strip_tags($brand));
///////////////
////////////////// gheymat:
	$pars1='<div id="ContentPlaceHolder1_ObjDiscountCost" class="DefaultDiv29" productcost="';
	$pars2='"';
	$price=slice($content,$pars1,$pars2);
	$price=trim(strip_tags($price));
///////////////
////////////////// tozihat:
	$pars1='<div id="ContentPlaceHolder1_ObjPublicProperties" class="DefaultDiv161">';
	$pars2='<div id="ContentPlaceHolder1_ObjRelatedProducts" class="DefaultDiv274">';
	$tozihat=slice($content,$pars1,$pars2);
	$tozihat=trim(strip_tags($tozihat));

////////////////// category:
	$pars1='<a class="DefaultDiv5" href="/Home">صفحه اصلی</a>';
	$pars2='<div class="DefaultDiv7">';
	$category=slice($content,$pars1,$pars2);
	$cat=explode('</a>',$category);
	$cat1=trim(strip_tags($cat[0]));
	$cat2=trim(strip_tags($cat[1]));
	$cat3=trim(strip_tags($cat[2]));
///////////////	
////////////////// moshabeh_brand:
	$pars1='<div class="DefaultDiv88">مشابه در سایر برندها</div>';
	$pars2='<div class="DefaultDiv88">مشابه از نظر قیمت</div>';
	$moshabeh_brand=slice($content,$pars1,$pars2);	
	$moshabeh_brand=trim(strip_tags($moshabeh_brand,'<a>'));
	$moshabeh=explode('/Products/DAK-',$moshabeh_brand);
	$key=0;
	for($i=0;$i<12;$i++)
	{
		$key=$key+2;
		$temp=explode('/',$moshabeh[$key]);
		$moshabehs.=trim(strip_tags($temp[0])).',';
	}
	$moshabehs_brand=rtrim($moshabehs,","); // remove last ,
	
///////////////	
////////////////// moshabeh_price:
	$pars1='<div class="DefaultDiv88">مشابه از نظر قیمت</div>';
	$pars2='<div class="DefaultDiv88">محصولات مرتبط</div>';
	$moshabeh_price=slice($content,$pars1,$pars2);	
	$moshabeh_price=trim(strip_tags($moshabeh_price,'<a>'));
	$moshabehb=explode('/Products/DAK-',$moshabeh_price);
	$key=0;
	for($i=0;$i<12;$i++)
	{
		$key=$key+2;
		$temp=explode('/',$moshabehb[$key]);
		$moshabehs2.=trim(strip_tags($temp[0])).',';
	}
	$moshabehs_price=rtrim($moshabehs2,","); // remove last ,
	
///////////////	

////////////////// moshabeh_mohsol:
	$pars1='<div class="DefaultDiv88">محصولات مرتبط</div>';
	$pars2='<div class="DefaultDiv46">امتیاز دهید</div>';
	$moshabeh_mohsol=slice($content,$pars1,$pars2);	
	$moshabeh_mohsol=trim(strip_tags($moshabeh_mohsol,'<a>'));
	$moshabehm=explode('/Products/DAK-',$moshabeh_mohsol);
	$key=0;
	for($i=0;$i<12;$i++)
	{
		$key=$key+2;
		$temp=explode('/',$moshabehm[$key]);
		$moshabehms.=trim(strip_tags($temp[0])).',';
	}
	$moshabehs_mohsol=rtrim($moshabehms,","); // remove last ,
	
///////////////	
////////////////// ax: 2 model hast ke ba if hal mishe
	$pars1='<img class="DefaultDiv18" onload="MainImageLoad()" src="';
	$pars2='"';
	$ax=slice($content,$pars1,$pars2);
	$ax='http://darukade.com'.trim(strip_tags($ax));
	if($ax=='http://darukade.com')
	{	
		$ax='';
		$part='OpenImages';
		$images=explode($part,$content);
		array_shift($images); // remove first element
		array_pop($images); // remove last element
		while($images)
		{
			$matn=array_shift($images); 
			$ax1=explode(',',$matn);
			$ax1[2]=str_replace(")","",$ax1[2]);
			$ax1[2]=str_replace("'","",$ax1[2]);
			$ax1[2]=str_replace("\"","",$ax1[2]);
			$ax1[2]=str_replace("/","",$ax1[2]);
			$ax1[2]=str_replace(">","",$ax1[2]);
			$ax.='http://www.admin.darukade.com/Icon/360/'.trim(strip_tags($ax1[2])).',';
			
		}
		$ax=rtrim($ax,","); // remove last ,
		
	}
	
////////////////// tag:
	$pars1='<div class="DefaultDiv41">برچسب ها :</div>';
	$pars2='</div>';
	$tags=slice($content,$pars1,$pars2);	
	$tags=trim(strip_tags($tags,'<a>'));
	$tagss=explode('</a>',$tags);
	$key=0;
	foreach($tagss as $tag)
	{
		$tagss=explode('>',$tag);
		$tagsss.=$tagss['1'].',';
	}
	$tags=rtrim($tagsss,","); // remove last ,
	
///////////////		
////////////////// anva:
	$pars1='<div class="DefaultDiv248">';
	$pars2='</div></div>';
	$anva_temp=slice($content,$pars1,$pars2);	
	$anva_temp=trim(strip_tags($anva_temp,'<div>'));
	//
	$anvass=explode('title="',$anva_temp);

	foreach($anvass as $anva)
	{
		$anvas=explode('"',$anva);
		$anva_title[]=$anvas['0'];
	}
	array_shift($anva_title); // remove first element	
	//
	
	$anvass_t=explode("SelectSlaveColor('",$anva_temp);
	array_shift($anvass_t); // remove first element
	foreach($anvass_t as $anva_t)
	{
		$anvas_t=explode("'",$anva_t);
		$anvas_t['0']=str_replace(",","",$anvas_t['0']);
		$anva_price[]=$anvas_t['0'];
	}
	//
	
	foreach($anva_title as $key=>$anvaaaaa)
	{		
		$anvam.=$anvaaaaa.':'.$anva_price[$key].',';
		
	}
	$anva=rtrim($anvam,","); // remove last ,	
///////////////	

////////////////// karbordi:
	$pars1='<div class="DefaultDiv46">اطلاعات کاربردی</div>';
	$pars2='<div class="DefaultDiv46">محصولات مرتبط</div>';
	$karbordi=slice($content,$pars1,$pars2);
	$karbordi=trim(strip_tags($karbordi));
///////////////
///////////////
	$result['title_en']=$title_en;
	$result['title_fa']=$title_fa;
	$result['type']=$type;
	$result['sex']=$sex;
	$result['size']=$size;
	$result['unit']=$unit;
	$result['expire']=$expire;
	$result['company']=$company;
	$result['code']=$code;
	$result['site']=$site;
	$result['group']=$group;
	$result['place']=$place;
	$result['enclosure']=$enclosure;
	$result['age']=$age;
	$result['price']=$price;
	
	$result['ax']=$ax;
	$result['barcode']=$barcode;
	$result['url']=$url;
	$result['id']=$id;
	$result['mavared']=$mavared;
	$result['ravesh']=$ravesh;
	$result['moshakhase']=$moshakhase;
	$result['tozih']=$tozih;
	$result['hoshdar']=$hoshdar;
	$result['sharayet']=$sharayet;
	$result['tarkibat']=$tarkibat;
	$result['brand']=$brand;
	$result['title']=$title;
	$result['barcode2']=$barcode2;
	$result['barcode3']=$barcode3;
	$result['cat1']=$cat1;
	$result['cat2']=$cat2;
	$result['cat3']=$cat3;
	$result['moshabehs_brand']=$moshabehs_brand;
	$result['moshabehs_price']=$moshabehs_price;
	$result['moshabehs_mohsol']=$moshabehs_mohsol;
	$result['tags']=$tags;
	$result['anva']=$anva;
	$result['karbordi']=$karbordi;
	

	//$result['tozihat']=$tozihat;
	return $result;
}

///////////////////////////
function slice($content,$pars1,$pars2)
{
	$part1=explode($pars1,$content);
	$new_content=$part1['1'];
	$part2=explode($pars2,$new_content);
	$result=$part2['0'];
	return $result;
	
}
///////////////////////////
function Curl($url){
if (function_exists('curl_init')) {
   // initialize a new curl resource
   $ch = curl_init();
   // set the url to fetch
   curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, "http://google.com");
   // don't give me the headers just the content
   curl_setopt($ch, CURLOPT_HEADER, 0);
   // return the value instead of printing the response to browser
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // use a user agent to mimic a browser
   curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$content = curl_exec($ch);
   // remember to always close the session and free all resources
   curl_close($ch);
}
else echo "درست نصب نشدم انگار. ";
return $content;
}
///////////
function insert_db($conn,$result)
{
	$id=$result['id'];
	$title_en=$result['title_en'];
	$title_fa=$result['title_fa'];
	$type=$result['type'];
	$sex=$result['sex'];
	$size=$result['size'];
	$unit=$result['unit'];
	$expire=$result['expire'];
	$company=$result['company'];
	$code=$result['code'];
	$site=$result['site'];
	$group=$result['group'];
	$place=$result['place'];
	$enclosure=$result['enclosure'];
	$age=$result['age'];
	$barcode=$result['barcode'];
	$ax=$result['ax'];
	$price=$result['price'];
	$tozihat=$result['tozihat'];

	$mavared=$result['mavared'];
	$ravesh=$result['ravesh'];
	$moshakhase=$result['moshakhase'];
	$tozih=$result['tozih'];
	$hoshdar=$result['hoshdar'];
	$sharayet=$result['sharayet'];
	$tarkibat=$result['tarkibat'];
	$brand=$result['brand'];
	$title=$result['title'];

	$barcode2=$result['barcode2'];
	$barcode3=$result['barcode3'];
	$cat1=$result['cat1'];
	$cat2=$result['cat2'];
	$cat3=$result['cat3'];
	$moshabehs_brand=$result['moshabehs_brand'];
	$moshabehs_price=$result['moshabehs_price'];
	$moshabehs_mohsol=$result['moshabehs_mohsol'];
	$tags=$result['tags'];
	$anva=$result['anva'];
	$karbordi=$result['karbordi'];
	
	$query="UPDATE `darukade` SET
		`title_en`='$title_en', 
		`title_fa`='$title_fa',
		`type`='$type',
		`sex`='$sex',
		`size`='$size',
		`unit`='$unit',
		`expire`='$expire',
		`company`='$company',
		`code`='$code',
		`site`='$site',
		`group`='$group',
		`place`='$place',
		`enclosure`='$enclosure',
		`age`='$age',
		`barcode`='$barcode',
		`ax`='$ax',
		`price`='$price',
		`tozihat`='$tozihat',
		`mavared`='$mavared',
		`ravesh`='$ravesh',
		`moshakhase`='$moshakhase',
		`tozih`='$tozih',
		`hoshdar`='$hoshdar',
		`sharayet`='$sharayet',
		`tarkibat`='$tarkibat',
		`brand`='$brand',
		`title`='$title',
		`barcode2`='$barcode2',
		`barcode3`='$barcode3',
		`cat1`='$cat1',
		`cat2`='$cat2',
		`cat3`='$cat3',
		`moshabehs_brand`='$moshabehs_brand',
		`moshabehs_price`='$moshabehs_price',
		`moshabehs_mahsol`='$moshabehs_mohsol',
		`tags`='$tags',
		`anva`='$anva',
		`karbordi`='$karbordi',
		`did`='1'
		WHERE `id`='$id'";
	$ok=mysqli_query($conn,$query);

	return $ok;
}
?>