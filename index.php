<style>
.col {

    text-align: center;
    margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: 0 0 3px rgb(0 0 0 / 50%);
}
.osn_block{
	display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    
}
</style>
<!--
mobile = col-mob
tab = col-tab
pc = col-pc
-->
<style type="text/css" id="css_xl" media="(min-width: 1200px)">

</style>
<style type="text/css" id="css_md" media="(min-width: 800px) and (max-width: 1200px)">

</style>
<div class="osn_block">

<?php
/*генератор стилей*/
$mas_rand_tag=['red','blue','test','kek','col-xl','col-sms-20'];
$mas_chisla=[10,20,30,40,50,60,70,80,90,100];

for ($i=0;$i<=10;$i+=1){
	$l=$mas_chisla[rand(0,count($mas_chisla)-1)];
	$k=$l+10;
	echo '<div class="col '.$mas_rand_tag[rand(0,5)].' col-md-'.$k.' col-xl-'.$l.' '.$mas_rand_tag[rand(0,5)].'">md='.$k.'% | xl='.$l.'%</div>';
	
}

?>
</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
		<script>
		var array_col_xl_proc=[];
		var array_col_md_proc=[];
		jQuery.isSubstring = function(haystack, needle) {
			return haystack.indexOf(needle) !== -1;
		};
				$('.col').each(function(i) {
					console.log($(this).attr('class'));
					var class_m=$(this).attr('class').split(" ");
					console.log(class_m);
					$(class_m).each(function(k){
						//console.log(class_m[k]+"|"+$.isSubstring(class_m[k], "col-xl-")); // true;​​​​​​​​​​​
						if ($.isSubstring(class_m[k], "col-xl-")==true){
								if ($.inArray(class_m[k], array_col_xl_proc)==-1){
									var str_proc=class_m[k].split('-');
									var proc=str_proc[2];
									//console.log(proc);
									var gen_css="."+class_m[k]+"{"+"-webkit-box-flex: 0;-ms-flex: 0 0 "+proc+"%;flex: 0 0 "+proc+"%;max-width: "+proc+"%;"+"}";
									console.log(gen_css);
									var css_t=$("#css_xl").html();
									css_t=css_t+""+gen_css;
									array_col_xl_proc.push(class_m[k]);
									$("#css_xl").html(css_t);
								}
						}else if ($.isSubstring(class_m[k], "col-md-")==true){
							if ($.inArray(class_m[k], array_col_md_proc)==-1){
									var str_proc=class_m[k].split('-');
									var proc=str_proc[2];
									//console.log(proc);
									var gen_css="."+class_m[k]+"{"+"-webkit-box-flex: 0;-ms-flex: 0 0 "+proc+"%;flex: 0 0 "+proc+"%;max-width: "+proc+"%;"+"}";
									console.log(gen_css);
									var css_t=$("#css_md").html();
									css_t=css_t+""+gen_css;
									array_col_xl_proc.push(class_m[k]);
									$("#css_md").html(css_t);
								}
						}
					});
					
				});
		</script>