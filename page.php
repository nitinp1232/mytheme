<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mytheme
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="maint1">
	<img class="mainbg1" src="wp-content\themes\mytheme\assets\bg1.jpg"/>	
	
<div class="container kk"> 
<div class="row">
<div class="col-6">
<span class="badge badge-light"><i class="fas fa-check-circle"></i>#1 Editiors Choice App of 2020</span>	
<h1 class="bb11"> Best app for your modern lifestyle</h1>
<span> Increase productivity with a simple to-do app. 
	app for managing your personal budget.</sapn>
<div class="container my-4">
<button type="button" class="btn btn-primary btn122">Try for free</button> 
<a href="#" class="wmm">Watch demo video </a></div>
</div>



<div class="col-6">
<img class="phn1" src="wp-content\themes\mytheme\assets\ph.png"/> 


 </div>

</div>
</div>

</div>
</div>


<div class="container comp">
<span> Trusted by companies like </span>
<div class="row compps"> 
<?php
 $args = array(
	 'post_type' => 'compp',
	 'status' => 'published',
	 'post_per_page' => 5
 );
// The Query
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
		<div class="col-2"><?php echo the_post_thumbnail(); ?> </div>
        <?php
    }

	
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata(); ?>

</div>
</div>

</div>

<div class="container"> 
<div class="row ph33">
	<div class="col-6">
		<div class="ph2"> <img src="wp-content\themes\mytheme\assets\ph2.png"> </div>
</div>




	<div class="col-6"> 
	<span class="appaw">Awesome apps <br> features </span> <br/>
	<span class="appde"> Increase productivity with a simple to-do app. 
	app for<br> managing your personal budget <span>
	
	<div class="container my-5"> 
		<table>
			<tr> <td style="width:135px"> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\fp.png"> </span></td>
			 <td><span class="htd1"> Fast Performance </span>
				 <p>Get your blood tests delivered at
home collect a sample from the
news your blood tests. </p> </td></tr> 
			<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\ty.png"> </span></td>
			<td><span class="htd2">Prototyping </span>
				<p> Get your blood tests delivered at
home collect a sample from the
news your blood tests.</p>
			</td></tr> 
			<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\py.png"> </span></td>
			 <td><span class="htd3"> Vector Editing</span>
				 <p>Get your blood tests delivered at
home collect a sample from the
news your blood tests. </p>
			 </td></tr> 
</table>



	</div>
	</div>



</div>
</div>

<div class="container my-5">
<div class="row">
	<div class="col-6"> 
		<span class="smm">Smart jackpots that<br>
you may love this<br>
anytime & anywhere </span>
	</div>
	<div class="col-1">
	<div class="vl"> </div> </div>
	<div class="col-5">
<span> The rise of mobile devices transforms the way we<br>
consume information entirely and the world's most<br>
elevant channels such as Facebook. </div>		
</div>
</div>
</div>






<div class="container" style="margin-top:100px;"> 
<div class="row"> 
<div class="col-4"> 
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\auto.png"> </span></td></tr>
			<tr> <td><span class="htd1"> Automatic Payouts </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table>

</div>
<div class="col-4">
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\a2.png"> </span></td></tr>
			<tr> <td><span class="htd2"> Network Effects </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table> </div>
<div class="col-4"> 
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\a3.png"> </span></td></tr>
			<tr> <td><span class="htd3"> Bigger Rewards Method </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table></div>

</div>



</div>





<!--  nex  -->





<div class="container"> 
<div class="row ph33">
	<div class="col-6">
		<div class="ph2"> <img src="wp-content\themes\mytheme\assets\db.png"> </div>
</div>




	<div class="col-6"> 
	<div class="jj2">
	<span class="appaw">Designed & built by <br>
the latest code <br>
integration</span><br>
	<span>The rise of mobile devices transforms the way we<br>
consume information entirely and the world's most <br>
elevant channels such as Facebook. </span>
	
<div class="container my-4">
<button type="button" class="btn btn-primary btn122">Learn more</button> 
</div>

	
	</div>



</div>
</div>
</div>


<div class="container" style="margin-top:70px;"> 
<span class="wwe"> <center>Why you should choose <br> our app </center></span><br>
	<span><center>The rise of mobile devices transforms the way we
consume information entirely<br> and the world's most 
elevant channels such as Facebook. </center></span>
</div>









<div class="container" style="margin-top:70px;">
<div class="container">

<div class="row"> 
<div class="col-4"> 
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b1.png"> </span></td></tr>
			<tr> <td><span class="ht22"> App Development </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table>

</div>
<div class="col-4">
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b2.png"> </span></td></tr>
			<tr> <td><span class="ht22"> 10 Times Awards  </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table> </div>
<div class="col-4"> 
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b3.png"> </span></td></tr>
			<tr> <td><span class="ht22"> Cloud Storage </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table></div>

</div>






</div>





<div class="container">

<div class="row"> 
<div class="col-4"> 
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b4.png"> </span></td></tr>
			<tr> <td><span class="ht22"> Customization </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table>

</div>
<div class="col-4">
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b5.png"> </span></td></tr>
			<tr> <td><span class="ht22"> UX Planning  </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table> </div>
<div class="col-4"> 
<table>
<tr> <td> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b6.png"> </span></td></tr>
			<tr> <td><span class="ht22">Customer Support </span>
				 <p>Get your blood tests delivered at<br>
home collect a sample from the<br>
news your blood tests. </p> </td></tr></table></div>

</div>






</div>

</div>


<!--kdmckmd-->


<div class="container-fluid"> 

<div class="row ph33">
<div class="col-2"> </div>
<div class="col-4">  
<span class="appaw">Ultimate features <br> that we built </span> <br/>
	<span class="appde"> The rise of mobile devices transforms the way we
consume information entirely. <span>
	
	<div class="container my-5"> 
		<table>
			<tr> <td style="width:235px"> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b1.png"> </span></td>
			<td style="width:235px"> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b5.png"> </span></td>  </tr>
			
			<tr><td><span class="ht22">App Development </span>
				 <p>Get your blood tests delivered at
home collect a sample from the
news your blood tests. </p> </td> 

<td><span class="ht22">UX Planning </span>
				 <p>Get your blood tests delivered at
home collect a sample from the
news your blood tests. </p> </td> 
</tr>


<tr> <td style="width:235px"> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b3.png"> </span></td>
			<td style="width:235px"> <span class="tdi"> <img src="wp-content\themes\mytheme\assets\b6.png"> </span></td>  </tr>
			
			<tr><td><span class="ht22">Cloud Storage </span>
				 <p>Get your blood tests delivered at
home collect a sample from the
news your blood tests. </p> </td> 

<td><span class="ht22">Customer Support </span>
				 <p>Get your blood tests delivered at
home collect a sample from the
news your blood tests. </p> </td> 
</tr>






			
</table>



	</div>





</div>

	<div class="col-6">
		<div class="ph2"> <img src="wp-content\themes\mytheme\assets\ppp.png"> </div>





	



</div>
</div>
</div>





<div class="container" style="margin-top:70px;"> 


<span class="wwe"> <center>Get awesome features, without<br> extra charges </center></span><br>
	<span><center>The rise of mobile devices transforms the way we
consume information entirely<br> and the world's most 
elevant channels such as Facebook. </center></span>
</div>
	</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
