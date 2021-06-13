<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 
$page_title = $footnav_dmca;
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $page_title; ?> - <?php echo $site_title; ?></title>
	<meta name="description" content="<?php echo $page_title; ?> - <?php echo $site_title; ?>" />
	<meta name="robots" content="noindex,follow" />
	<!-- CSS and Scripts -->
	<?php include 'includes/headscripts.php'; ?>
	</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<center><h1><a href="<?php echo $site_url; ?>"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> <?php echo $site_title; ?></a></h1></center>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<!-- Search Form -->
		<form action="<?php echo $site_url;?>/search_main.php" class="input-group input-group-lg">
		<input id="you-search" name="q" type="text" class="form-control" autocomplete="off" placeholder="<?php echo $searchf_text; ?>">
		<input type="hidden" name="change" value="1">
		<span class="input-group-btn">
		<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		</span>
		</form>
		<!-- /Search Form -->
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="page-header">
		<h2><?php echo $page_title; ?></h2>
		</div>
		<p>Information Concerning Copyright Claims

As part of our mission to develop the most complete searchable index of video files legally posted on the Internet for promotional and other legal purposes, our search crawler continuously crawls the Internet for new, legally posted video files. We are, however, primarily an information location tool, and we maintain no editorial oversight over the links in our search index. We do not control the third party websites contained in our index. We are not a "file sharing" site, peer to peer or otherwise; and we in no way support or endorse illegal copying of video. Because we do not own or have editorial control over these third party sites, it is possible that our index may link to some video files that were posted without the copyright owner's authorization.

We rely on copyright owners to protect their own copyright interests by communicating with us. We will immediately take down the link in response to a valid notice of alleged infringement submitted under the Digital Millennium Copyright Act ("DMCA"). We urge copyright owners to directly contact any third party website that has posted an infringing video file. The link in the website index only points to the location of the file hosted elsewhere on the web. Accordingly, while this website can and does delete the link from its search engine upon request, it does not, because it cannot, delete the infringing file, which was posted and is hosted on the Internet by a third party over which this website has no control. We recommend that you use our search engine to identify the third party who posted and is hosting the infringing file, and to contact that third party to delete the infringing video file itself from the Internet prior to having us remove the link.

Digital Millennium Copyright Act

It is our policy to respond immediately to clear notices of alleged copyright infringement. This page describes the information that should be present in these notices. This procedure is designed to make submitting notices of alleged infringement to this website as straightforward as possible, while reducing the number of notices that we receive that are fraudulent or difficult to understand or verify. The form of notice specified below is consistent with the form required by the United States law (an official summary of which can be found at the U.S. Copyright Office Web Site, http://www.copyright.gov/legislation/dmca.pdf), but we will respond to notices of this form from other jurisdictions as well. We suggest that you consult your legal advisor before filing a notice. Also, please be aware that there are penalties (including costs and attorney's fees) for false claims under the DMCA. See http://www.chillingeffects.org/dmca512/faq.cgi for more details.

Infringement Notification

To file a notice of infringement with us, you must provide to the website Copyright Agent designated below a written communication (an email, that includes each of the items specified below:

- an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest (a Word or PDF document highly recommended);
- a description of the copyrighted work that you claim has been infringed, identification of the time(s), date(s) and link(s) the material that you claim is infringing was displayed on the website or service, and any other information that is reasonably sufficient for this website to locate the material;
- your address, telephone number, and email address;
- a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; and
- a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf.
</p>
		
		</div>
	</div>
</div>
<!-- end Main Content -->
<?php include 'includes/footer.php';?>