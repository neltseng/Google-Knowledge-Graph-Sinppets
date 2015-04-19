
// 企業用 Google Knowledge Graph 精簡版
function cwp_google_knowledge_graph() {
	if (is_front_page()) {
		echo '<script type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","name":"cloudwp","url":"https://cloudwp.pro","logo":"https://assets.cloudwp.pro/images/logo-gkg.png","contactPoint":[{"@type":"ContactPoint","telephone":"+886-3-5220-911","contactType":"customer service"}],"sameAs":["https://www.facebook.com/CloudWP","https://plus.google.com/+CloudwpPro","https://twitter.com/cloudwppro","https://www.linkedin.com/company/cloudwp"]}</script>';
	}}
add_action('wp_head', 'cwp_google_knowledge_graph', 5);
