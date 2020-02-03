

/*==========================================================================================
	
This file contains styles related to the colour scheme of the theme

==========================================================================================*/



/* articles margins */
.main{margin:0 0;}
.navbar-bkg{padding:0 15px; border-bottom:solid 1px #e2e2e2;}
.blog-item{margin-bottom:0px;
padding-left:0px;
padding-right:0px;}


.wrap-articles .row .blog-item:first-child{padding-left:0px;}
.wrap-articles .row .blog-item:last-child{padding-right:0px;}
.wrap-articles .row:last-of-type .blog-item{margin-bottom:0px;}
.wrap-articles .row:last-of-type .blog-item-3col:nth-child(1), .wrap-articles .row:last-of-type .blog-item-3col:nth-child(2){padding-right:0px;}

.blog-item{height:16em;}
.blog-item-full, .single-post-title{height:30em;}



@media (min-width: 768px) and (max-width: 979px) {
.main{margin:0 0px;}
.navbar-bkg{padding:0 15px;}
.blog-item{padding-left:0px;
padding-right:0px;}
.wrap-articles .row:last-of-type .blog-item{margin-bottom:15px;}
.wrap-articles .row:last-of-type .blog-item:last-child{margin-bottom:0px;}

}

@media (max-width: 767px) {
.main{margin:0 0px;}
.navbar-bkg{padding:5px 15px;}
.blog-item{margin-bottom:0px;
padding-left:0px;
padding-right:0px;}
.wrap-articles .row:last-of-type .blog-item{margin-bottom:15px;}
.wrap-articles .row:last-of-type .blog-item:last-child{margin-bottom:0px;}
}

