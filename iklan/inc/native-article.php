<style>
:root{
  --space-2:10px;
  --rounded-normal:10px;
  --article-thumb-size:95px;
  --color-default:#757575; 
  --color-link-primary:#FF7300; 
  --color-link-secondary:#212121; 
}
*, html{padding:0; margin:0; font-family:sans-serif;}
ul{list-style:none;}
a{font-weight:bold; cursor:pointer; display:inline-block; text-decoration:none;
transition:all 0.25s; -moz-transition:all 0.25s; -webkit-transition:all 0.25s; -o-transition:all 0.25s;}
.content_center{display:flex; justify-content:center; align-items:center;}

.article-list-row{display:grid; grid-template-columns:var(--article-thumb-size) 1fr; color:var(--color-default); 
grid-column-gap:var(--space-2); grid-row-gap:var(--space-2); padding-bottom:var(--space-2); 
border-bottom:1px dashed rgba(0,0,0,0.1);}
.article-list-thumb{position:relative; overflow:hidden; border-radius:var(--rounded-normal);}
.article-list-thumb-link{width:100%; position:relative;}
.article-list-thumb-link:before{content:''; display:block; padding-top:100%;}
.article-list-thumb-link:hover, .article-list-cate:hover{opacity:0.5;}
.article-list-thumb-link img{position:absolute; z-index:2; top:0; left:0; width:100%; height:100%; object-fit:cover;}
.article-list-info{justify-content:flex-start;}
.article-list-info > span{display:flex; flex-wrap:wrap;}
.article-list-info > span > *:not(.article-list-title){margin:7px 7px 0 0;}
.article-list-info > span > *:not(.article-list-title) *{font-size:12px;}
.article-list-title{color:hsl(var(--color-link-secondary) / 100%); width:100%;}
.article-list-title:hover{color:hsl(var(--color-link-primary) / 100%);}
.article-list-title h2{font-size:16px; line-height:140%; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;}
.article-list-cate{display:inline-block; padding:3px 5px; border:1px solid rgba(0,0,0,0.05); background-color:rgba(0,0,0,0.05); 
color:hsl(var(--color-link-secondary) / 100%); border-radius:calc(var(--rounded-normal) / 2);}
.article-list-desc{display:none;}

@media screen and (min-width:640px) and (min-height:160px){
  .article-list-row{--article-thumb-size:178px;}
  .article-list-thumb:before, .article-list-thumb-link:before{padding-top:56.25%;}
  .article-list-title h2{font-size:17px;}
  .article-list-desc{grid-column:1/3; font-size:14px; line-height:150%;
  display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;}
}

@media (prefers-color-scheme:dark){
  :root{
    --color-default:#BDBDBD; 
    --color-link-secondary:#EEEEEE; 
  }
  .article-list-row{border-bottom:1px dashed rgba(255,255,255,0.15);}
  .article-list-cate{background-color:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.1);}
}
</style>

<div class="article-list-row">
  <div class="article-list-thumb">
    <a aria-label="Link Title" class="article-list-thumb-link"
    href="https://www.viva.co.id/berita/nasional/1207128-lawan-covid-19-bersama-viva-ajak-masyarakat-untuk-peduli-sesama" target="_blank">
      <img src="../../iklan/img/sample-native.jpg" />
    </a>
  </div>
  
  <div class="article-list-info content_center">
    <span>
	  <a aria-label="Link Title" class="article-list-title" href="https://www.viva.co.id/berita/nasional/1207128-lawan-covid-19-bersama-viva-ajak-masyarakat-untuk-peduli-sesama" target="_blank">
	    <h2>VIVA Ajak Masyarakat Lawan Covid-19 dengan Berdonasi untuk Sesama</h2>
	  </a>
      <a class="article-list-cate content_center" aria-label="Link Title" href="https://www.viva.co.id/berita/nasional/" target="_blank">
        <h3>Nasional</h3>
      </a>
	  <div class="article-list-date content_center">
        <span>00 Jan 0000</span>
      </div>
	</span>
  </div>
  
  <div class="article-list-desc">
    Jumlah pasien positif Covid-19 di Indonesia makin bertambah setiap harinya sejak kasus pertama diumumkan Presiden Joko Widodo pada 2 Maret lalu.
  </div>
</div>