<?php
/**
 * Template Name: Home Page
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); 

$homeContent['en']['Audio Webcast'] = 'Audio Webcast';
$homeContent['zh-hant']['Audio Webcast'] = '網絡廣播';
$homeContent['en']['Presentation'] = 'Presentation';
$homeContent['zh-hant']['Presentation'] = '公司簡報';
$homeContent['zh-hant']['Presentation'] = '公司簡報';
$homeContent['en']['Press release'] = 'Press release';
$homeContent['zh-hant']['Press release'] = '新聞發佈';
$homeContent['en']['Print this page in PDF'] = 'Print this page in PDF';
$homeContent['zh-hant']['Print this page in PDF'] = '列印此頁之PDF';

$homeContent['en']['HIGHLIGHTS'] = 'Financial Highlights';
$homeContent['zh-hant']['HIGHLIGHTS'] = '財務摘要';

$str = '<div class="title_HL">A thoughtful, comprehensive strategy and disciplined execution delivered record results.</div>';
$str .= '<ul>';
$str .= '<li>Record sales</li>';
$str .= '<li>Record profit</li>';
$str .= '<li>Record cash flow</li>';
$str .= '</ul>';
$homeContent['en']['HIGHLIGHTS Excerpt'] =  $str;

$str = '<div class="title_HL">有序推行深思熟慮的<br />全面性策略，使我們<br />取得彪炳業績。</div>';
$str .= '<ul>';
$str .= '<li>銷售額創新高</li>';
$str .= '<li>創紀錄溢利</li>';
$str .= '<li>創新高紀錄現金流量</li>';
$str .= '</ul>';
$homeContent['zh-hant']['HIGHLIGHTS Excerpt'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">SALES Turnover</span>';
$str .= '<span class="graphUnit"> USDm</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="smallFont">USD</span>';
$str .= '<span class="largeFont">3,852m</span>';
//$str .= '<span class="smallFont">m</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart1 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">營業額</span>';
$str .= '<span class="graphUnit"> 百萬美元</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="smallFont"></span>';
$str .= '<span class="largeFont">3,852</span>';
$str .= '<span class="smallFont">百萬美元</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart1 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">Gross Margin </span>';
$str .= '<span class="graphUnit"> %</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="largeFont">33.5%</span>';
//$str .= '<span class="smallFont">%</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart2 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">毛利率</span>';
$str .= '<span class="graphUnit"> %</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="largeFont">33.5%</span>';
//$str .= '<span class="smallFont">%</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart2 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">EBIT</span>';
$str .= '<span class="graphUnit"> USDm</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="smallFont">USD</span>';
$str .= '<span class="largeFont">260m</span>';
//$str .= '<span class="smallFont">m</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart3 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">除利息及稅項前盈利</span>';
$str .= '<span class="graphUnit"> 百萬美元</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="smallFont"></span>';
$str .= '<span class="largeFont">260</span>';
$str .= '<span class="smallFont">百萬美元</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart3 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">BASIC EARNINGS PER SHARE</span>';
$str .= '<span class="graphUnit"> US cents</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="smallFont">US</span>';
$str .= '<span class="largeFont">11.42 cents</span>';
//$str .= '<span class="smallFont">cents</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart4 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">每股基本盈利</span>';
$str .= '<span class="graphUnit"> 美仙</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
$str .= '<span class="smallFont"></span>';
$str .= '<span class="largeFont">11.42</span>';
$str .= '<span class="smallFont">美仙</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart4 title'] =  $str;

$homeContent['en']['CHAIRMANS STATEMENT'] = 'Chairman&#39;s Statement';
$homeContent['zh-hant']['CHAIRMANS STATEMENT'] = '主席報告書';

$str = '<div class="title_HL">I am pleased with the sustained progress made in new product development and our excellent productivity gains, which are the catalysts for sales and profit growth.</div>';
$str .= '<div style="padding-bottom:25px;">I am pleased to announce that in 2012 TTI delivered record sales, record profit and record cash flow. Our disciplined implementation of the TTI strategic plan is yielding outstanding results across all of our business units and geographic regions. I am particularly pleased with the sustained progress made in new product development and our excellent productivity gains, which are the catalysts for sales and profit growth. These results once again demonstrate the fundamental strengths of TTI’s focus on our strategic drivers of Powerful Brands, Innovative Products, Operational Excellence and Exceptional People.</div>';
$homeContent['en']['CHAIRMANS STATEMENT CONTENT'] = $str;

$str = '<div class="title_HL">本人對於研發嶄新產品的驕人成績及強勁的生產力感欣慰，此等均有助於推動銷售額及溢利的增長。</div>';
$str .= '<div style="padding-bottom:25px;font-size:105%;">本人欣然公佈創科實業於二零一二年之銷售額、溢利及現金流量均創新高。我們有秩序地推行創科的策略性計劃，令所有業務單位及市場地區都取得彪炳業績。本人對於研發嶄新產品的驕人成績及強勁的生產力尤其欣慰，此等均有助於推動銷售額及溢利的增長。我們的驕人業績再次證明創科實業的策略性驅動力乃建基於強勁品牌、創新產品、卓越營運及優秀人才。</div>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT CONTENT'] = $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">Dividend per share</span>';
$str .= '<span class="graphUnit"> US cents</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
//$str .= '<span class="smallFont">+</span>';														
$str .= '<span class="largeFont">+37.3%</span>';
//$str .= '<span class="smallFont">%</span>';
$str .= '</div>';
$homeContent['en']['CHAIRMANS STATEMENT chart1 title'] = $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">每股股息</span>';
$str .= '<span class="graphUnit"> 美仙</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
//$str .= '<span class="smallFont">+</span>';														
$str .= '<span class="largeFont">+37.3%</span>';
//$str .= '<span class="smallFont">%</span>';
$str .= '</div>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT chart1 title'] = $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">Basic Earnings per share</span>';
$str .= '<span class="graphUnit"> US cents</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
//$str .= '<span class="smallFont">+</span>';
$str .= '<span class="largeFont">+20.6%</span>';
//$str .= '<span class="smallFont">%</span>';
$str .= '</div>';
$homeContent['en']['CHAIRMANS STATEMENT chart2 title'] = $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">每股基本盈利</span>';
$str .= '<span class="graphUnit"> 美仙</span>';
$str .= '</div>';
$str .= '<div class="graphProfile">';
//$str .= '<span class="smallFont">+</span>';
$str .= '<span class="largeFont">+20.6%</span>';
//$str .= '<span class="smallFont">%</span>';
$str .= '</div>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT chart2 title'] = $str;

$homeContent['en']['CHAIRMANS STATEMENT read more'] = 'Read more about the Chairman&#39;s Statement';
$homeContent['zh-hant']['CHAIRMANS STATEMENT read more'] = '了解主席報告書更多';

$homeContent['en']['OPERATIONAL HIGHLIGHTS'] = 'Operational Highlights';
$homeContent['zh-hant']['OPERATIONAL HIGHLIGHTS'] = '營運摘要';

$homeContent['en']['Sales by Location'] = 'Sales by Location';
$homeContent['zh-hant']['Sales by Location'] = '營業額以市場地區劃分';

$homeContent['en']['NORTH AMERICA'] = 'NORTH AMERICA';
$homeContent['zh-hant']['NORTH AMERICA'] = '北美洲';

$homeContent['en']['Europe'] = 'Europe';
$homeContent['zh-hant']['Europe'] = '歐洲';

$homeContent['en']['Rest of the World'] = 'Rest of the World';
$homeContent['zh-hant']['Rest of the World'] = '其他地區';

$homeContent['en']['TURNOVER'] = 'TURNOVER from external customers';
$homeContent['zh-hant']['TURNOVER'] = '銷售予外界客戶之營業額';

$homeContent['en']['GLOBAL OPERATIONS'] = 'GLOBAL OPERATIONS';
$homeContent['zh-hant']['GLOBAL OPERATIONS'] = '全球營運';

$homeContent['en']['CANADA'] = 'CANADA';
$homeContent['zh-hant']['CANADA'] = '加拿大';
$homeContent['en']['UNITED STATES'] = 'UNITED STATES';
$homeContent['zh-hant']['UNITED STATES'] = '美國';
$homeContent['en']['MEXICO'] = 'MEXICO';
$homeContent['zh-hant']['MEXICO'] = '墨西哥';
$homeContent['en']['LATIN AMERICA'] = 'LATIN AMERICA';
$homeContent['zh-hant']['LATIN AMERICA'] = '拉丁美洲';
$homeContent['en']['MIDDLE EAST'] = 'MIDDLE EAST, AFRICA,<br />INDIA SUBCONTINENT';
$homeContent['zh-hant']['MIDDLE EAST'] = '中東、非洲、<br />印度次大陸';
$homeContent['en']['MIDDLE EAST 2'] = 'MIDDLE EAST, AFRICA,<br />INDIA SUBCONTINENT';
$homeContent['zh-hant']['MIDDLE EAST 2'] = '中東、非洲、<br />印度次大陸';
$homeContent['en']['HEADQUARTERS'] = 'ASIA<br />TTI WORLDWIDE HEADQUARTERS';
$homeContent['zh-hant']['HEADQUARTERS'] = '亞洲<br />創科實業<br />全球總部';
$homeContent['en']['HEADQUARTERS 2'] = 'ASIA<br />TTI WORLDWIDE HEADQUARTERS';
$homeContent['zh-hant']['HEADQUARTERS 2'] = '亞洲創科實業全球總部';
$homeContent['en']['AUSTRALASIA'] = 'AUSTRALASIA';
$homeContent['zh-hant']['AUSTRALASIA'] = '澳大拉西亞';

$homeContent['en']['WORKFORCE BY LOCATION'] = 'WORKFORCE BY LOCATION';
$homeContent['zh-hant']['WORKFORCE BY LOCATION'] = '地區劃分';

$homeContent['en']['The Americas'] = 'The Americas';
$homeContent['zh-hant']['The Americas'] = '美洲';
$homeContent['en']['EMEA'] = 'EMEA';
$homeContent['zh-hant']['EMEA'] = '歐洲、中東、非洲';
$homeContent['en']['Asia Pacific'] = 'Asia Pacific';
$homeContent['zh-hant']['Asia Pacific'] = '亞太地區';

$homeContent['en']['Operational Highlights read more'] = 'Read more about the Operational Highlights';
$homeContent['zh-hant']['Operational Highlights read more'] = '了解營運摘要更多';

$homeContent['en']['CEO title'] = 'CEO&#39;s Strategic Review';
$homeContent['zh-hant']['CEO title'] = '行政總裁策略回顧';

$homeContent['en']['Chief Executive Officers Strategic Review'] = 'Chief Executive Officer&#39;s Strategic Review';
$homeContent['zh-hant']['Chief Executive Officers Strategic Review'] = '行政總裁策略回顧';

$homeContent['en']['CEO read more'] = 'Read more about the CEO&#39;s Statement';
$homeContent['zh-hant']['CEO read more'] = '了解行政總裁策略回顧更多';

$homeContent['en']['REVIEW OF OPERATIONS'] = 'Review of Operations';
$homeContent['zh-hant']['REVIEW OF OPERATIONS'] = '業務回顧';

$homeContent['en']['Power Equipment'] = 'Power Equipment';
$homeContent['zh-hant']['Power Equipment'] = '電動工具';

$homeContent['en']['Floor Care'] = 'Floor Care and Appliances';
$homeContent['zh-hant']['Floor Care'] = '地板護理及器具';

$homeContent['en']['Sales by Business'] = 'Sales by Business';
$homeContent['zh-hant']['Sales by Business'] = '營業額以業務劃分';

$homeContent['en']['Review of Operations'] = 'Review of Operations';
$homeContent['zh-hant']['Review of Operations'] = '業務回顧';

$homeContent['en']['Executive Summary'] = 'Executive Summary';
$homeContent['zh-hant']['Executive Summary'] = '行政摘要';

$homeContent['en']['MDA & Governance'] = 'MD&A & Governance';
$homeContent['zh-hant']['MDA & Governance'] = '討論、分析與管治';

$homeContent['en']['Our Brands'] = 'Our Brands';
$homeContent['zh-hant']['Our Brands'] = '我們的品牌';

$homeContent['en']['Find out more'] = 'Find out more';
$homeContent['zh-hant']['Find out more'] = '了解更多';

$homeContent['en']['Milwaukee intro'] = 'MILWAUKEE<sup>®</sup> is an industry-leading manufacturer and marketer of Heavy-Duty, Portable Electric Power Tools and Accessories. MILWAUKEE<sup>®</sup> leverages technology and disruptive innovation to deliver trade-based solutions to skilled tradesmen around the world.';
$homeContent['zh-hant']['Milwaukee intro'] = 'MILWAUKEE<sup>®</sup> 是領先業界的重型電動工具、手提電動工具及配件之製造商及營銷商。MILWAUKEE<sup>®</sup>憑藉先進科技與革命性創新技術，為世界各地的專業工匠提供商用解決方案。';

$homeContent['en']['AEG intro'] = 'The AEG<sup>®</sup> power tools brand has been delivering high-performance tools since 1898. 114 years later and nothing has changed, AEG<sup>®</sup> Power Tools continues to push boundaries and innovate with  a current focus on the cordless sector, harnessing lithium ion power as well  a myriad of traditional but highly innovative corded tools.';
$homeContent['zh-hant']['AEG intro'] = '自1898年起，AEG<sup>®</sup>電動工具品牌推出眾多效能卓越的工具。114年後的今天，AEG<sup>®</sup>電動工具繼續推陳出新，全力開拓充電式鋰離子電動工具領域，同時推出結合傳統智慧與嶄新設計的交流式電動工具。';

$homeContent['en']['Ryobi intro'] ='RYOBI<sup>®</sup> brand offers the most extensive award winning and innovative line of consumer focused products and accessories for worldwide use. The RYOBI<sup>®</sup> power tool range is anchored by the 18-volt ONE+ System<sup>®</sup> of over 50 products, ranging from drills, drivers, saws and trimmers to sanders. The brand also offers a wide variety of outdoor products that supports end-user needs with extensive lines of energy efficient gas, electric and cordless products.';
$homeContent['zh-hant']['Ryobi intro'] = 'RYOBI<sup>®</sup>品牌為世界各地提供以消費者為主的眾多屢獲殊榮之嶄新產品和配件。RYOBI<sup>®</sup>電動工具系列以18伏特ONE+ System<sup>®</sup>為基礎，推出逾五十款產品，包括電鑽、電批、電鋸、剪草機及打磨機。此品牌也提供多款戶外園藝工具，包括具能源效益的燃油驅動式、電動式及充電式產品，充分滿足終端用戶的需要。';

$homeContent['en']['homelite intro'] = 'HOMELITE<sup>®</sup> Consumer Products manufactures a full line of Outdoor Power Equipment including String trimmers, blowers, chainsaws, hedge trimmers, pressure washers, generators and outdoor accessories for the consumer, do-it-yourself and garden enthusiast.';
$homeContent['zh-hant']['homelite intro'] = 'HOMELITE<sup>®</sup>消費者產品備有一系列戶外電動工具，包括剪草機、鼓風機、鏈鋸、籬笆修剪機、高壓清洗機、發電機，以及各款戶外產品配件，款式一應俱全，專為消費者、DIY一族和園藝愛好者而設。';

$homeContent['en']['Hoover intro'] = 'HOOVER<sup>®</sup> is creating the future of Floor Care. We recognize that people’s homes and lives are constantly evolving, and we’re changing with them.</p><p>We are proud that each of the 700 patents we currently hold represents a challenge we’ve overcome in our drive to make new, powerful and desirable cleaning products.</p><p>We want to be recognized for making people’s lives easier and so we make those that do the cleaning the focus of everything we do.';
$homeContent['zh-hant']['Hoover intro'] = 'HOOVER<sup>®</sup> 為地板護理創造未來。我們深明人的家居和生活不斷變化，因此我們也與時並進。</p><p>我們目前擁有700項專利權，每一項專利權均印證了我們致力提供全新、高效和合意的清潔用品，我們對此引以為傲。</p><p>我們冀望可為人們締造更寫意的生活，並取得認同，為此我們所有的工作重點首要是提供合適的清潔用品。';

$homeContent['en']['VAX intro'] = 'Performance is everything. That’s why VAX<sup>®</sup> is the UK’s bestselling Floor Care brand. And the only company in the UK to offer cleaning products in every category.</p><p>From carpet cleaners, upright and cylinder vacuum cleaners, steam, cordless, and hard floor cleaners – we listen carefully to those who are using our products, so that we can design with their needs in mind.';
$homeContent['zh-hant']['VAX intro'] = '效能重於一切。這正是VAX<sup>®</sup>成為英國最暢銷地板護理品牌的原因。我們也是英國唯一提供所有種類清潔用品的公司。</p><p>從地毯清洗機、直立式及塵罐式吸塵機、蒸氣清洗機、充電式以至地板清洗機產品，我們均細心聆聽各用戶的意見，務求設計最能令客戶滿足的產品。';

$homeContent['en']['Dirt Devil intro'] = 'DIRT DEVIL<sup>®</sup> is a vibrant and contemporary brand that addresses every floor care need in one great value, convenient and easy to use package.</p><p>Each product is engineered to get a job done well and efficiently. From quick clean-ups to full house cleaning, DIRT DEVIL<sup>®</sup> has the answer – so busy people can clean up fast and with style.';
$homeContent['zh-hant']['Dirt Devil intro'] = 'DIRT DEVIL<sup>®</sup>是一個充滿活力的當代品牌，產品物超所值，方便易用，能滿足所有地板護理需要。</p><p>每種產品均以美滿有效完成工作為目標。DIRT DEVIL<sup>®</sup>適合快速打掃以及全屋清潔，因此事務繁忙之人士也可迅速敏捷完成清潔工作。';

$homeContent['en']['DOWNLOADS'] = 'Downloads';
$homeContent['zh-hant']['DOWNLOADS'] = '下載';

$homeContent['en']['Full Report (PDF)'] = 'Full Report (PDF)';
$homeContent['zh-hant']['Full Report (PDF)'] = '全份年報(PDF)';

$homeContent['en']['Download full report'] = 'Download full report';
$homeContent['zh-hant']['Download full report'] = '下載全份年報';

$homeContent['en']['Sections (PDF)'] = 'Sections (PDF)';
$homeContent['zh-hant']['Sections (PDF)'] = '章節(PDF)';

$homeContent['en']['Financial Highlights'] = 'Financial Highlights';
$homeContent['zh-hant']['Financial Highlights'] = '財務摘要';
$homeContent['en']['Governance'] = 'Governance';
$homeContent['zh-hant']['Governance'] = '管治';
$homeContent['en']['Board of Directors'] = 'Board of Directors';
$homeContent['zh-hant']['Board of Directors'] = '董事會';
$homeContent['en']['Managements Discussion and Analysis'] = 'Management&#39;s Discussion and Analysis';
$homeContent['zh-hant']['Managements Discussion and Analysis'] = '管理層討論與分析';
$homeContent['en']['Corporate Governance Report'] = 'Corporate Governance Report';
$homeContent['zh-hant']['Corporate Governance Report'] = '企業管治報告';
$homeContent['en']['Report of the Directors'] = 'Report of the Directors';
$homeContent['zh-hant']['Report of the Directors'] = '董事會報告書';
$homeContent['en']['Business Review'] = 'Business Review';
$homeContent['zh-hant']['Business Review'] = '業務回顧';
$homeContent['en']['Operational Highlights'] = 'Operational Highlights';
$homeContent['zh-hant']['Operational Highlights'] = '營運摘要';
$homeContent['en']['Power Equipment Highlights'] = 'Power Equipment Highlights';
$homeContent['zh-hant']['Power Equipment Highlights'] = '電動工具摘要';
$homeContent['en']['Power Equipment'] = 'Power Equipment';
$homeContent['zh-hant']['Power Equipment'] = '電動工具';
$homeContent['en']['Floor Care and Appliances Highlights'] = 'Floor Care and Appliances Highlights';
$homeContent['zh-hant']['Floor Care and Appliances Highlights'] = '地板護理及器具摘要';
$homeContent['en']['Floor Care and Appliances'] = 'Floor Care and Appliances';
$homeContent['zh-hant']['Floor Care and Appliances'] = '地板護理及器具';
$homeContent['en']['Financials'] = 'Financials';
$homeContent['zh-hant']['Financials'] = '財務';
$homeContent['en']['Financial Summary'] = 'Financial Summary';
$homeContent['zh-hant']['Financial Summary'] = '財務概要';
$homeContent['en']['Independent Auditors Report'] = 'Independent Auditor&#39;s Report';
$homeContent['zh-hant']['Independent Auditors Report'] = '獨立核數師報告書';
$homeContent['en']['Consolidated Statement of Comprehensive Income'] = 'Consolidated Statement of Comprehensive Income';
$homeContent['zh-hant']['Consolidated Statement of Comprehensive Income'] = '綜合全面收入表';
$homeContent['en']['Consolidated Statement of Financial Position'] = 'Consolidated Statement of Financial Position';
$homeContent['zh-hant']['Consolidated Statement of Financial Position'] = '綜合財務狀況表';
$homeContent['en']['Statements of Financial Position'] = 'Statement of Financial Position';
$homeContent['zh-hant']['Statements of Financial Position'] = '財務狀況表';
$homeContent['en']['Consolidated Statement of Changes in Equity'] = 'Consolidated Statement of Changes in Equity';
$homeContent['zh-hant']['Consolidated Statement of Changes in Equity'] = '綜合權益變動表';
$homeContent['en']['Consolidated Statement of Cash Flow'] = 'Consolidated Statement of Cash Flow';
$homeContent['zh-hant']['Consolidated Statement of Cash Flow'] = '綜合現金流量表';
$homeContent['en']['Notes to the Consolidated Financial Statements'] = 'Notes to the Consolidated Financial Statements';
$homeContent['zh-hant']['Notes to the Consolidated Financial Statements'] = '綜合財務報表附註';
$homeContent['en']['Corporate Information'] = 'Corporate Information';
$homeContent['zh-hant']['Corporate Information'] = '公司資料';
$langContent['en']['Print this page'] = '&#59158;';
$langContent['zh-hant']['Print this page'] = '&#59158;';
$langContent['en']['Print this page in PDF'] = '&#59158;';
$langContent['zh-hant']['Print this page in PDF'] = '&#59158;';
$langContent['en']['Download PDF file of this section'] = '&#128229;';
$langContent['zh-hant']['Download PDF file of this section'] = '&#128229;';
$langContent['en']['Email this page'] = '&#59196;';
$langContent['zh-hant']['Email this page'] = '&#59196;';
$langContent['en']['Download this section'] = '&#128229;';
$langContent['zh-hant']['Download this section'] = '&#128229;';

$langContent['en']['home share position'] = 'right:-125px;';
$langContent['zh-hant']['home share position'] = 'right: -133px;';

$langContent['en']['download tooltips position'] = 'right:-53px;';
$langContent['zh-hant']['download tooltips position'] = 'right:-13px;';

$langContent['en']['print tooltips position'] = 'right:-63px;';
$langContent['zh-hant']['print tooltips position'] = 'right:-48px;';

$homeContent['en']['USDm'] = 'USDm';
$homeContent['zh-hant']['USDm'] = '百萬美元';

$homeContent['en']['Quick Links'] = 'Quick Links';
$homeContent['zh-hant']['Quick Links'] = '快速連結';

$homeContent['en']['tencent'] = 'TTI Annual Report 2012';
$homeContent['zh-hant']['tencent'] = '创科实业2012年年报';

$homeContent['en']['PDF Links'] = 'TTI_AR12_home_en.pdf';
$homeContent['zh-hant']['PDF Links'] = 'TTI_AR12_home_tc.pdf';

$shortLang = '';
if (ICL_LANGUAGE_CODE == 'zh-hant'){
	$shortLang = '_tc';
}
?>
<script type="text/javascript">	
$(document).ready(function(){
	 var homeRightNavTop = $('#homeRightNav').offset().top;
	 $(window).scroll(function(){
		  if( $(window).scrollTop() > 0) {
				$('#wrapper').css({"margin-top":"185px"});
				
		  }		  
	 });
	 
 	//initHomeScrollMenu();  
});
$(window).load(function () {
    initHomeScrollMenu();  
	 <?php
	 if(ICL_LANGUAGE_CODE=="en")
		echo 'initHomeGraph("en");';
	else
		echo 'initHomeGraph("zh-hant");';
	?>
});
</script>
<div id="container">
  <div id="content" role="main" class="clearfix">
    <div class="centerDiv">
		<div id="primary">
		  <div id="iconBtnstickyContainer">
			  <div id="iconBtn">
					<a href="javascript:;" id="headerShareBtn"><?php echo $langContent[ICL_LANGUAGE_CODE]['Email this page']; ?></a>
					<a id="downloadLink" target="_blank" href="<?php echo site_url();echo '/wp-content/uploads/2013/pdf/';echo $homeContent[ICL_LANGUAGE_CODE]['PDF Links'];?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Download this section']; ?><span id="tooltips_download" style="<?php echo $langContent[ICL_LANGUAGE_CODE]['download tooltips position']; ?>"></span></a>
					<a id="printLink" target="_blank" href="<?php echo site_url();echo '/wp-content/uploads/2013/pdf/';echo $homeContent[ICL_LANGUAGE_CODE]['PDF Links'];?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Print this page in PDF']?><span id="tooltips_print" style="<?php echo $langContent[ICL_LANGUAGE_CODE]['print tooltips position']; ?>"></span></a>
			  </div>  
			  <div class="addthis_toolbox addthis_default_style shareBox" id="shareBox" style="display:none; <?php echo $langContent[ICL_LANGUAGE_CODE]['home share position']; ?>">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_google_plusone_badge" g:plusone:size="small" g:plusone:name="" g:plusone:href="https://plus.google.com/102383601500147943541/"></a> 
					<!--<a class="addthis_button_linkedin"></a>
					<a class="addthis_button_reddit"></a>-->
					<a class="addthis_button_email"></a>
					<a class="addthis_button_sinaweibo"></a>
					<div id="qqwb_share__" data-appkey="801387349" data-icon="2" data-counter="0" data-content="<?php echo $homeContent[ICL_LANGUAGE_CODE]['tencent']; ?>"></div>
			  </div>
		  </div>
		  <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
		  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5153b9e640b238a8"></script>
        <div class="homeContentLeft">
		
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS'];?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv clearfix">
                <div class="contentLeft"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS Excerpt'];?> </div>
                <div class="contentRight">
                  <div class="clearfix">
                    <div class="graphContainer"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart1 title'];?>
                      <div id="home-graph-container-1" class="graph-container" style="width: 250px; height: 150px;"></div>
                    </div>
                    <div class="graphContainer noMarginRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart2 title'];?>
                      <div id="home-graph-container-2" class="graph-container" style="width: 250px; height: 150px;"></div>
                    </div>
                  </div>
                  <div class="clearfix">
                    <div class="graphContainer"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart3 title'] ;?>
                      <div id="home-graph-container-3" class="graph-container" style="width: 250px; height: 150px;"></div>
                    </div>
                    <div class="graphContainer noMarginRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart4 title'] ;?>
                      <div id="home-graph-container-4" class="graph-container" style="width: 250px; height: 150px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv">
                <div class=" clearfix">
                  <div class="contentLeft"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/img_chairman.jpg" alt="" /> </div>
                  <div class="contentRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT CONTENT'] ;?>
                    <div class="clearfix">
                      <div class="graphContainer"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT chart1 title'] ;?>
                        <div id="home-graph-container-5" class="graph-container" style="width: 250px; height: 150px;"></div>
                      </div>
                      <div class="graphContainer noMarginRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT chart2 title'] ;?>
                        <div id="home-graph-container-6" class="graph-container" style="width: 250px; height: 150px;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="readMoreDiv"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/chairmans-statement<?php echo get_curr_lang_second_path() ; ?>" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['CEO title'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv">
                <div class=" clearfix">
                  <div class="contentLeft"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/img_ceo.jpg" alt="" /> </div>
                  <div class="contentRight">
                    <?php
												if(ICL_LANGUAGE_CODE=="en"){
												?>
                    <div style="font-size:20px; font-family:'Trade Gothic W01 Bold'; line-height:25px; padding-bottom:10px;">A Bold Vision Driven by a Powerful Strategic Roadmap</div>
                    <div style="padding-bottom:25px;">TTI has a powerful strategy and a disciplined process to ensure we deliver outstanding performance in any economic environment and across all geographic regions. Our vision is to become the global leader in each of our strategic businesses through the deployment of Powerful Brands, Innovative Products, Operational Excellence and Exceptional People. Over the past few years we have raised the level of performance at TTI by focusing on executing our Strategic Roadmap. The record results in 2012 and our accomplishments over the last three years demonstrate that we are on the right path. We have achieved our record performance by consistently delivering strong organic growth. We have also increased free cash flow while strengthening our balance sheet with efficient use of working capital.</div>
                    <? }
												else{
												?>
                    <div style="font-size:20px; font-weight:bold;font-family:'Heiti SC', 'Microsoft Yahei', 'SimHei'; line-height:25px; padding-bottom:10px;">強勁策略路線圖驅動下展現之秀麗前景</div>
                    <div style="padding-bottom:25px;font-size: 105%;">創科實業擁有強勁的策略和嚴謹有序的業務流程，以確保無論在任何經濟環境下及在所有地區均能創出卓越佳績。我們的願景是透過利用強勁品牌、創新產品、優秀人才及卓越營運，成為各策略業務的全球領導者。過去數年，我們集中執行策略路線圖，已提升創科實業的業績水平。二零一二年業績創新高紀錄及我們在過去三年取得的成就，足以證明我們的路線正確。我們持續強勁的自然內部增長，取得創新高紀錄的業績。我們亦增加了自由現金流量並有效地運用營運資金以增強資產負債表。</div>
                    <?
												}
												?>
                  </div>
                </div>
                <div style="padding-bottom:30px;"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/img_ceo_chart<?php echo get_curr_lang_second_path() ; ?>.gif" alt="" /> </div>
                <div class="readMoreDiv"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/ceos-strategic-review" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CEO read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['REVIEW OF OPERATIONS'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv">
                <div class="clearfix">
                  <div class="reviewOperationTwoColumn">
                    <div class="headlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment'] ;?></div>
                    <div class="clearfix">
                      <div class="graphContainer fullwidthGraph">
                        <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Sales by Business'] ;?></span> </div>
                        <div class="clearfix">
                          <div id="home-graph-container-13" class="graph-container" style="width:140px;height:145px;float:left;"></div>
                          <div class="graphProfile" style="float:left; width:235px; padding:1.2em 0;">
                            <?php
															if(ICL_LANGUAGE_CODE=="en"){
															?>
                            <span class="midFont darkText">USD</span><span class="midFont numberText">2.9 billion </span><br>
                            <span class="midFont numberText">74.4%</span><span class="midFont darkText"> of the total turnover</span>
                            <? }
															else{
															?>
                            <span class="midFont darkText">營業額</span><span class="midFont numberText">2,900,000,000</span><span class="midFont darkText">美元</span><br /><span class="midFont darkText">佔集團營業額</span><span class="midFont numberText">74.4%</span>
                            <?
															}
															?>
                          </div>
                        </div>
                      </div>
                      <div class="reviewOperationDetailContent">
                        <?php
													if(ICL_LANGUAGE_CODE=="en"){
													?>
                        The Power Equipment business comprises power tools, hand tools, outdoor products and accessories. In 2012, sales at this business rose by 7.6% to USD2.9 billion, supported by growth in all geographic markets and the strong global expansion of <span class="resetLetterSpace">MILWAUKEE</span><sup>®</sup>. We have solid momentum behind the MILWAUKEE<sup>®</sup> REDLITHIUM™ cordless platforms and there has been further growth in Hand Tools and Power Tool Accessories. RYOBI<sup>®</sup> cordless lithium ion power tools and outdoor products continue to make impressive gains with consumers. The business accounted for 74.4% of Group turnover, against 72.6% in 2011. We generated approximately one third of sales from new products, in line with our plans.<br /><a href="<?php echo site_url();echo get_curr_lang_path();?>/executive-summary<?php echo get_curr_lang_second_path();?>/power-equipment-highlights<?php echo get_curr_lang_second_path();?>">Power Equipment Highlights</a>
                        <? }
													else{
													?>
                        電動工具業務涵蓋電動工具、手動工具、戶外<br />園藝工具及配件。在各地市場業務均見增長以及MILWAUKEE<sup>®</sup>品牌全球業務強勁增長的支持下，帶動電動工具業務二零一二年的銷售額上升7.6%至2,900,000,000美元。<span class="resetLetterSpace">MILWAUKEE<sup>®</sup> REDLITHIUM™ </span>充電式平台增長動力強勁，而手動工具及電動工具配件亦有進一步增長。RYOBI<sup>®</sup>充電式鋰離子電動工具以及戶外園藝工具的顧客數量增長可觀，令人欣喜。年內電動工具業務佔本集團營業額74.4%，對比二零一一年則為72.6%。約三份之一銷售額來自嶄新產品，與計劃相符。<br /><a href="<?php echo site_url(); echo get_curr_lang_path();?>/executive-summary<?php echo get_curr_lang_second_path();?>/power-equipment-highlights<?php echo get_curr_lang_second_path();?>">電動工具摘要</a>
                        <?
													}
													?>
                      </div>
                    </div>
                  </div>
                  <div class="reviewOperationTwoColumn noMarginRight">
                    <div class="headlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care'] ;?></div>
                    <div class="clearfix">
                      <div class="graphContainer fullwidthGraph">
                        <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Sales by Business'] ;?></span> </div>
                        <div class="clearfix">
                          <div id="home-graph-container-14" class="graph-container" style="width:140px;height:145px;float:left;"></div>
                          <div class="graphProfile" style="float:left; width:235px; padding:1.2em 0;">
                            <?php
															if(ICL_LANGUAGE_CODE=="en"){
															?>
                            <span class="midFont darkText">USD</span><span class="midFont"><span class="numberText">1.0</span> billion</span><br>
                            <span class="midFont numberText">25.6%</span><span class="midFont darkText"> of the total turnover</span>
                            <? }
															else{
															?>
                            <span class="midFont darkText">營業額</span><span class="midFont numberText">1,000,000,000</span><span class="midFont darkText">美元</span><br /><span class="midFont darkText">佔集團營業額</span><span class="midFont numberText">25.6%</span>
                            <?
															}
															?>
                          </div>
                        </div>
                      </div>
                      <div class="reviewOperationDetailContent">
                        <?php
													if(ICL_LANGUAGE_CODE=="en"){
													?>
                        Floor care and Appliances margins improved significantly, but sales fell slightly by 1.6% over 2011 to USD1.0 billion following a rationalization of the business which has seen non-performing operations cut and expenses reduced in North America. Our global product development process and centralized purchasing initiatives are bringing benefits. Key gains were made in Europe, with double-digit revenue growth, while global new products sales were maintained at one third of total sales. The business accounted for 25.6% of Group turnover against 27.4% in 2011.<br /><a href="<?php echo site_url(); echo get_curr_lang_path();?>/executive-summary<?php echo get_curr_lang_second_path(); ?>/floor-care-and-appliances-highlights<?php echo get_curr_lang_second_path(); ?>">Floor Care and Appliances Highlights</a>
                        <? }
													else{
													?>
                        地板護理及器具的利潤率大幅改善，銷售額微降1.6%至1,000,000,000美元，原因乃年內推行業務整頓，重整北美洲一些表現欠佳的業務以削減部分開支。我們在全球推行的產品研發程序及中央採購策略持續發揮效用，主要得益見諸歐洲方面，營業額取得雙位數字增長，而全球新產品銷售額維持佔總營業額三份之一。此項業務佔本集團年內營業額25.6%，對比二零一一年則為27.4%。<br /><a href="<?php echo site_url(); echo get_curr_lang_path();?>/executive-summary<?php echo get_curr_lang_second_path(); ?>/floor-care-and-appliances-highlights<?php echo get_curr_lang_second_path(); ?>">地板護理及器具摘要</a>
                        <?
													}
													?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv lessPaddingTop">
                <div class="headlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Our Brands'] ;?></div>
                <div class="subheadlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment'] ;?></div>
                <div class="brandTabContainer">
                  <div class="clearfix" id="homePowerEquipmentBrandTabContainer">
                    <div class="powerEquipmentBrandContainer active">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/operationalHighlight/logo_milwaukee.png" width="82" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="powerEquipmentBrandContainer">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/operationalHighlight/logo_aeg.png" width="59" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="powerEquipmentBrandContainer">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/operationalHighlight/logo_ryobi.png" width="82" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="powerEquipmentBrandContainer noMarginRight">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/general/logo_homelite_lrg.png" width="106" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="brandContentContainer clearfix" id="homePowerEquipmentBrandContentContainer">
                    <div class="brandContentItem" style="display:block;">
                      <div class="brandContent" style="background-color:#E12139;">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/milwaukee_tab_logo.png" width="90" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Milwaukee intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/industrial-power-tools-and-accessories<?php echo get_curr_lang_second_path() ; ?>/milwaukee<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_milwaukee.jpg" alt="" /> </div>
                    </div>
                    <div class="brandContentItem">
                      <div class="brandContent" style="background-color:#F47F24;">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/aeg_tab_logo.png" width="84" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['AEG intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/professional-power-tools-and-accessories<?php echo get_curr_lang_second_path() ; ?>/aeg<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_aeg.jpg" alt="" /> </div>
                    </div>
                    <div class="brandContentItem">
                      <div class="brandContent" style="background-color:#C2D42D;color:#393939;">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/ryobi_tab_logo.png" width="103" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Ryobi intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/consumer-and-trade-power-tools-and-accessories<?php echo get_curr_lang_second_path() ; ?>/ryobi<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_ryobi.jpg" alt="" /> </div>
                    </div>
                    <div class="brandContentItem">
                      <div class="brandContent" style="background-color:#EC1C24">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/homelite_tab_logo.png" width="151" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['homelite intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/outdoor-products-and-accessories<?php echo get_curr_lang_second_path() ; ?>/homelite<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_homelite.jpg" alt="" /> </div>
                    </div>
                  </div>
                </div>
                <div class="subheadlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care'] ;?></div>
                <div class="brandTabContainer">
                  <div class="clearfix" id="homeFloorCareBrandTabContainer">
                    <div class="powerEquipmentBrandContainer active threeColumn">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/floorcare/logo_hoover.png" width="47" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="powerEquipmentBrandContainer threeColumn">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/floorcare/logo_vax.png" width="89" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="powerEquipmentBrandContainer threeColumn noMarginRight">
                      <div>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                          <tr>
                            <td height="74"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/floorcare/logo_dirt_devil.png" width="56" alt="" /></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="brandContentContainer clearfix" id="homeFloorCareBrandContentContainer">
                    <div class="brandContentItem" style="display:block;">
                      <div class="brandContent" style="background-color:#C31230;" id="brandContent-hoover">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/hoover_tab_logo.png" width="44" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Hoover intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/hoover<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_hoover.jpg" alt="" /> </div>
                    </div>
                    <div class="brandContentItem">
                      <div class="brandContent" style="background-color:#F16528;">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/vax_tab_logo.png" width="93" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['VAX intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/vax<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_vax.jpg" alt="" /> </div>
                    </div>
                    <div class="brandContentItem">
                      <div class="brandContent" style="background-color:#CED0D1;color: #393939;">
                        <div class="subheadlineTitle"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/dirt_tab_logo.png" width="51" alt="" /></div>
                        <p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Dirt Devil intro'] ;?></p>
                        <div class="findoutMoreDiv"> <a class="btn_findoutMore clearfix" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/dirt-devil<?php echo get_curr_lang_second_path() ; ?>"> <span class="findoutMoreLeft"></span> <span class="findoutMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Find out more'] ;?></span> <span class="findoutMoreRight"></span> </a> </div>
                      </div>
                      <div class="brandImg"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/pt_dirtdevil.jpg" alt="" /> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['OPERATIONAL HIGHLIGHTS'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv"> 
                <div class="subheadlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Sales by Location'] ;?></div>
                <div class="clearfix">
                  <div class="graphContainer">
                    <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['NORTH AMERICA'] ;?></span> </div>
                    <div class="clearfix pieChartContainer">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td width="135"><div id="home-graph-container-7" class="graph-container" style="width:140px;height:145px"></div></td>
                          <td class="graphProfile verticalAlign" width="110"><span class="largeFont">72.9</span> <span class="smallFont">%</span></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="graphContainer">
                    <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Europe'] ;?></span> </div>
                    <div class="clearfix pieChartContainer">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td width="135"><div id="home-graph-container-8" class="graph-container" style="width:140px;height:145px"></div></td>
                          <td class="graphProfile verticalAlign" width="110"><span class="largeFont">19.9</span> <span class="smallFont">%</span></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="graphContainer noMarginRight">
                    <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Rest of the World'] ;?></span> </div>
                    <div class="clearfix pieChartContainer">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td width="135"><div id="home-graph-container-9" class="graph-container" style="width:140px;height:145px"></div></td>
                          <td class="graphProfile verticalAlign" width="110"><span class="largeFont">7.2</span> <span class="smallFont">%</span></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div style="padding-bottom: 0px;" class="subheadlineTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['TURNOVER'] ;?></div>
                <div style="margin-bottom: 10px;class="graphUnit"><?php echo $homeContent[ICL_LANGUAGE_CODE]['USDm'] ;?></div>
                <div class="clearfix">
                  <div class="graphContainer">
                    <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['NORTH AMERICA'] ;?></span> </div>
                    <div id="home-graph-container-10" class="graph-container" style="height:150px;width:250px"></div>
                  </div>
                  <div class="graphContainer">
                    <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Europe'] ;?></span> </div>
                    <div id="home-graph-container-11" class="graph-container" style="height:150px;width:250px"></div>
                  </div>
                  <div class="graphContainer noMarginRight">
                    <div class="graphTitleDiv"> <span class="graphTitle"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Rest of the World'] ;?></span> </div>
                    <div id="home-graph-container-12" class="graph-container" style="height:150px;width:250px"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv lessPaddingTop">
                <div class="readMoreDiv"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/operational-highlights<?php echo get_curr_lang_second_path() ; ?>" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Operational Highlights read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['DOWNLOADS'] ;?></div>
            </div>
            <div class="sectionContent" style="background-image:none;">
              <div class="homeSectionContentDiv">
                <div class="clearfix">
                  <div class="downloadLeft">
                    <div class="headlineTitle headerBorder"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Full Report (PDF)'] ;?></div>
                    <div class="reportCoverContainer"><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/home_cover<?php echo get_curr_lang_second_path() ; ?>.jpg" alt="" /></a></div>
                    <a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Download full report'] ;?></a> </div>
                  <div class="downloadRight">
                    <div class="headlineTitle headerBorder"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Sections (PDF)'] ;?></div>
                    <div class="downloadLinksContainer">
                      <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['Executive Summary'] ;?></div>
                      <ul class="downloadLinkList">
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Financial_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financial Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Chairman_Statement<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_CEO_Review<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Chief Executive Officers Strategic Review'] ;?></a></li>
                         <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Operational_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Operational Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Power_Equipment_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Power_Equipment<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Floor_Care_And_Appliances_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care and Appliances Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Floor_Care_And_Appliances<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care and Appliances'] ;?></a></li>
                      </ul>
                    </div>
                    <div class="downloadLinksContainer">
                      <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['MDA & Governance'] ;?></div>
                      <ul class="downloadLinkList">
                      	<li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Board_of_Directors<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Board of Directors'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Management_Discussion_Analysis<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Managements Discussion and Analysis'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Corporate_Governance<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Corporate Governance Report'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Director_Report<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Report of the Directors'] ;?></a></li>
                      </ul>
                    </div>
                    <div class="downloadLinksContainer">
                      <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financials'] ;?></div>
                      <ul class="downloadLinkList">
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Financial_Summary<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financial Summary'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Independent_Auditor_Report<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Independent Auditors Report'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Comprehensive_Income<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Comprehensive Income'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Financial_Position<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Financial Position'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Statement_Financial_Position<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Statements of Financial Position'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Changes_Equity<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Changes in Equity'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Cash_Flow<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Cash Flow'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Notes_Consolidated_Financial_Statement<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Notes to the Consolidated Financial Statements'] ;?></a></li>
                      </ul>
                    </div>
                    <ul class="downloadLinkList">
                      <li><a target="_blank" style="background-position: 0 5px" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Corporate_info<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink sectionHeader"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Corporate Information'] ;?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="secondary"> 
        <div id="homeRightNav"> <a href="javascript:;" class="active"><?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS'] ;?></a> <a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT'] ;?></a><a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CEO title'] ;?></a> <a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['REVIEW OF OPERATIONS'] ;?></a> <a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['OPERATIONAL HIGHLIGHTS'] ;?></a>  <a href="javascript:;" class="lastItem"><?php echo $homeContent[ICL_LANGUAGE_CODE]['DOWNLOADS'] ;?></a> </div>
      </div>
    </div>
  </div>
  <!-- #content --> 
</div>
<!-- #container -->
<?php
	get_footer();
?>