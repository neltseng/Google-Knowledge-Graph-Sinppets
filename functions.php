<?php 

// 企業用 Google Knowledge Graph
  function cwp_google_knowledge_Graph() {
    echo '<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "cloudwp", //機構名稱
  "url" : "http://www.your-company-site.com", //網站網址
  "logo" : "http://www.example.com/logo.png", //logo連結
  "contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "+1-401-555-1212", //電話號碼
      "contactType" : "customer service"
    } ] }
</script>' ;
}

add_action('wp_head', 'cwp_google_knowledge_Graph' , 5);
