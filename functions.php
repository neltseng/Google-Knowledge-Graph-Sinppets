// 企業用 Google Knowledge Graph

function cwp_google_knowledge_graph() {
	if (is_front_page()) {
		echo '<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "cloudwp", //機構名稱
  "url" : "https://cloudwp.pro", //網站網址
  "logo" : "https://assets.cloudwp.pro/images/logo-gkg.png", //logo連結
  "contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "+886-3-5220-911", //電話號碼
      "contactType" : "customer service"
    } ]
  "sameAs": [ "https://www.facebook.com/CloudWP", //Facebook 粉絲專頁
      "https://plus.google.com/+CloudwpPro", //Google+
      "https://twitter.com/cloudwppro"] } //Twitter
</script>';
	}}
add_action('wp_head', 'cwp_google_knowledge_graph', 5);
