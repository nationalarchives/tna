<?php
/**
 * Template Name: Business plan
 */

get_header(); ?>

<style>
    body {
        background: #fff;
    }

    .business-plan {
        height: 455px;
        background: #54575e url('wp-content/themes/tna/images/about/bp-main-banner.jpg');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width:100%;
    }
    .headlines hr {
        margin:0;
    }
    .headlines h1 {
        color: #ffffff;
        text-align: left;
        margin: 0;
        font-size: 40px;
        padding: 13% 0 20px 0;
        box-sizing: border-box;
    }

    .headlines h2 {
        color: #000;
        text-align: left;
        margin: 0;
        padding: 2% 0 0 0;
        font-family: 'Bitter', 'Open Sans', verdana, arial, sans-serif;
        box-sizing: border-box;
    }
    .headlines h3 {
        padding:0;
        margin:20px 0 0 0;
        display:block;
    }
    .headlines-align-center {
        color: #000;
        text-align: center;
        margin: 0;
        width:100%;
        padding: 2% 0 0 0;
        font-size:36px;
        font-family: 'Bitter', 'Open Sans', verdana, arial, sans-serif;
        box-sizing: border-box;
    }
    .headlines p {
        text-align: left;
        font-family: 'Open Sans', verdana, arial, sans-serif;
        color: #25272a;
    }

    .business-plan p {
        color: #ffffff;
        text-align: center;
        line-height: 1.8em;
        margin: 0px 0px 0.5em;
    }

    .bp-tabs {
        margin: 0;
        padding: 0
    }

    .records-tab
    .bp-tabs #archives-tab, .js .aria-tabs p, .no-js .aria-tabs ul {
        display: none
    }

    .bp-tabs ul {
        margin: 0;
        position: relative;
        padding: 0;
    }

    .bp-tabs li {
        display: inline-block;
        text-align: center;
        height: 100%;
        margin: 0;
        position: relative;
        z-index: 9999;


    }

    .bp-tabs li button {
        background: none;
        padding: 10px;


    }
    .bp-tabs-container li.selected button{
        color:#008484;

    }
    .bp-tabs li.selected:after {
        content: "";
        position: absolute;
        top: 110%;
        left: 50%;
        z-index: 1000;
        border-top: 10px solid #eee;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        margin-left: -10px;

    }

    .bp-tabs-container {
        border-bottom: 5px solid #eee;
    }

    .bp-tabs-container ul {
        margin: 0 auto;
        width: 1220px;
    }
    .rounded-list span{
        font-size:16px !important;
    }
    .headlines ol {
        counter-reset: li; /* Initiate a counter */
        list-style: none; /* Remove default numbering */
        *list-style: decimal; /* Keep using default numbering for IE6/7 */
        font: 15px 'trebuchet MS', 'lucida sans';
        padding: 0;
        margin-bottom: 4em;
        text-shadow: 0 1px 0 rgba(255,255,255,.5);
    }

    .headlines ol ol {
        margin: 0 0 0 1em; /* Add some left margin for inner lists */

    }

    .rounded-list span{
        font-size: 20px;
        position: relative;
        display: block;
        padding: .4em .4em .4em 2em;
        *padding: .4em;
        margin: .5em 0;
        background: #eee;
        color: #444;
        text-decoration: none;
        transition: all .3s ease-out;
        -webkit-transition: all .3s ease-out;
        -moz-transition: all .3s ease-out;
    }

    .rounded-list span:hover{
        background: #eee;
    }

    /*.rounded-list span:hover:before{
        transform: rotate(360deg);
    } */

    .rounded-list span:before{
        content: counter(li);
        counter-increment: li;
        color:#fff;
        position: absolute;
        left: -1.3em;
        top: 50%;
        margin-top: -1.3em;
        background: #008484;
        height: 2em;
        width: 2em;
        line-height: 2em;
        border: .3em solid #fff;
        text-align: center;
        border-radius: 2em;
        transition: all .3s ease-out;
    }
    .bx-viewport {
        height:auto !important
    }
    .bx-wrapper .bx-pager {
        text-align: center;
        font-size: .85em;
        color: #666;
        padding-top: 20px;
    }
    .bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active {
        background: #000;
    }
    .bx-wrapper .bx-pager.bx-default-pager a {
        background: #666;
        text-indent: -9999px;
        display:inline-block;
        width: 10px;
        height: 10px;
        outline: 0;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    .bx-wrapper .bx-pager-item{
        display:inline-block;
        margin:0 5px 0 0;
    }
    .bpTestimonials {
        text-align:center;
        padding:40px 0 0 0;

    }
    .bpTestimonials span {
        width:100%;
        font-weight:bold;
        text-align:center;
        clear:both;
        float:none;
        display:block;
        font-size:20px;
        padding:20px 0 0 0;
        font-style: italic;
    }
    .bp-hr:after {
        content: url('wp-content/themes/tna/images/about/bp-quotes.png') no-repeat;
        background:;
        width:60px;
        height:60px;
        top:-25px;
        position: absolute;
        left: 47.3%;
        z-index: 1;
    }
    .bp-backBlue {
        background:#405480 !important;
    }
    .bp-backBlue img {
        width:100%
    }
</style>

<section class="business-plan">
    <div class="container headlines">
        <div class="breather">
            <div class="row" id="holds-breadcrumb">
                <div class="col starts-at-half clr">
                    <!-- Breadcrumbs -->
                    <?php include 'breadcrumb.php'; ?>
                    <h1>Lorem Ipsuim is simple <br/> dummy text of the printing</h1>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="page_wrap" class="container headlines" role="main">
    <!-- Page content -->
    <div class="breather">
        <div class="row">
            <div class="col starts-at-full ends-at-full box clr">
                <h2>The National Archives is many things to many different audiences.</h2>
                <p>
                    For government we are the custodian of the public record and trusted experts in managing, preserving and using information.<br />
                    For the public we provide free access to more than 1,000 years of the nation’s history and connect people with the millions of stories contained in our collection.<br />
                    For the wider archives sector we give leadership and support, helping archives to build the skills and capacity needed to sustain the nation’s archival heritage.<br />
                    For the academic community and others engaged in scholarly research we offer opportunities for collaboration and partnership across a broad range of disciplines.<br /><br />
                    Four years ago we set ourselves the goal of building the infrastructure needed by a modern national archive. As a result, we are more efficient, more sustainable and more effective than ever before. But we aren’t content to stop there. Over the next four years we will need to think and organise ourselves differently, to meet the needs of each of our major audiences and to tackle our biggest strategic challenge – digital.<br /><br />
                    We know that the funding climate will continue to be tough. But we also know that nothing is gained or achieved without ambition.
                    Our new strategic priorities and goals point to an exciting future for The National Archives. Come with us.<br />
                </p>
                <a class="button float-right" href="#">Read full plan (PDF)</a>
                <!-- closes grid-within-grid -->
            </div>
        </div>
    </div>
</div>

<div class="bp-tabs" id="tabs-pointed">
    <div class="bp-tabs-container">
        <ul role="tablist">
            <li id="government-tab" class="tab selected" role="tab" aria-selected="true">
                <button id="records-advanced-search">Government</button>
                <span class="tri-down-fff"></span></li>
            <li id="public-tab" class="tab" role="tab" aria-selected="false">
                <button id="record-creators-advanced-search">Public</button>
                <span class="tri-down-fff"></span></li>
            <li id="archives-sector-tab" class="tab" role="tab" aria-selected="false">
                <button id="record-creators-advanced-search">Archives sector</button>
                <span class="tri-down-fff"></span></li>
            <li id="academic-tab" class="tab" role="tab" aria-selected="false">
                <button id="record-creators-advanced-search">Academic</button>
                <span class="tri-down-fff"></span></li>
            <li id="digital-challenge-tab" class="tab" role="tab" aria-selected="false">
                <button id="record-creators-advanced-search">Digital challenge</button>
                <span class="tri-down-fff"></span></li>
        </ul>
    </div>
</div>
<div class="container headlines">
    <div class="breather">

        <section class="row" aria-labelledby="government-tab" role="tabpanel" aria-hidden="false"
                 style="display: block;">
            <div class="col starts-at-full ends-at-two-thirds box clr">
                <strong>We will provide expert advice and scrutiny to government, making sure that the record survives and thrives.</strong><br />
                The National Archives is both the custodian of the public record and the Government’s expert in the management, preservation and use of information. We are uniquely placed, by virtue of our history, responsibilities and expertise to provide trusted and independent advice and services across government and the wider public sector.<br />
                Over the next four years we will foster increased cooperation between departments, making sure that innovation, experience and expertise is more widely shared. We will encourage and facilitate greater government transparency and public scrutiny and we will provide government and legislative bodies with the tools to work more efficiently and effectively than ever before.
                <h3>Goals</h3>
                <hr />
                <ol class="rounded-list">
                    <li><span>Explore shared service innovations and good practice in information management, and pilot solutions for the transfer of digital records </span></li>
                    <li><span>Provide a government network for knowledge and information management leaders, to enhance capability</span></li>
                    <li><span>Hold government departments to account for their record handling, to keep the transition to the 20-year rule on track</span></li>
                    <li><span>Enable greater government transparency, an increasingly open record and innovation in the use, re-use and sharing of data</span></li>
                    <li><span>Shape and deliver outstanding legislative platforms and services which underpin the responsibilities of the UK Parliaments and Assemblies.</span></li>
                </ol>
            </div>
            <div class="col starts-at-full ends-at-one-third box clr">
                During 2014-15, close to 5,000 pieces of new legislation were published as governments delivered their respective legislative programmes, including passing substantial amounts of new legislation that repeal or revoke previous laws.<br />
                <br />
                In March 2015, over 800 pieces were published and the month had one of the busiest days on record for new legislation publishing.<br />
                <br />
                We broadened our legislation open data services, adding support for the Akoma Ntoso international standard format which helped to move the UK to first place in the Global Open Data Index for Legislation.<br />
            </div>
        </section>


        <section class="row" aria-labelledby="public-tab" role="tabpanel" aria-hidden="false"
                 style="display: block;">
            <div class="col starts-at-full ends-at-two-thirds box clr">
                We will inspire the public with new ways of using and experiencing our collection
                The National Archives is a window on more than 1,000 years of the nation’s history and our collection at Kew is open to everyone, for free. Our users come from many different backgrounds and have a wide range of interests. We have built a strong reputation for our expert advice, the efficiency of our services and our work to bring the record to life.
                Many of our users tell us that visiting The National Archives is a life changing experience. We want to give even more people the chance to have that same feeling, whether they set foot on our site at Kew or encounter us online. To make this happen we will reshape the services we offer and we will devise fresh and exciting ways to reach out to and involve our users, both old and new.
                Over the next four years we will change the way you think about archives.
                <h3>Goals</h3>
                <ol class="rounded-list">
                    <li><span>Grow our audience by connecting with new users   </span></li>
                    <li><span>Provide a joined-up experience on site and online and use technology to make our routine services more efficient </span></li>
                    <li><span>Develop new and exciting public programmes and services which rival those of other pre-eminent institutions</span></li>
                    <li><span>Inspire curiosity about The National Archives and the hidden gems in our collection</span></li>
                    <li><span>Re-imagine and reconfigure our Kew site to be a vibrant and welcoming learning environment </span></li>
                </ol>
            </div>
            <div class="col starts-at-full ends-at-one-third box clr">
                During 2014-15, we provided over 640,000 physical records to our users in our reading rooms.

                We responded to over 34,000 written requests.

                In March 2015, The National Archives and its records were the centrepiece of an unprecedented ten-part BBC series. Portillo’s State Secrets revealed some of the remarkable stories from the archives to an audience of over 1 million per episode.

                Since 2009, we have reduced the amount of energy used to power our building and repositories, moving from a Display Energy Certificate (DEC) rating of G (the least efficient) to a C in 2014.

                Last year, volunteers helped us to preserve and rehouse more than 46,000 photographs of the UK coastline created by the Ministry of Defence from 1946 to 1966.

                Our remote volunteers completed the transcription of over 36,000 crew lists of the Merchant Navy from 1915 in collaboration with the National Maritime Museum.
            </div>
        </section>

        <section class="row" aria-labelledby="archives-sector-tab" role="tabpanel" aria-hidden="false"
                                  style="display: block;">
            <div class="col starts-at-full ends-at-two-thirds box clr">
                We will be an effective leader and partner for the archives sector, to sustain and develop the nation’s collection
                The nation’s collection is made up of thousands of archives, each with its own unique history. The richness of our archives is the result of generations of careful stewardship by countless individuals and institutions, including local authorities, families, businesses, religious groups and charities. We lead the wider archive sector in England and perform the Historical Manuscripts Commission's functions in relation to records in private ownership.
                We sit at the heart of a diverse network of archives and our approach to leading and supporting this network will reflect that diversity. Over the next four years we will actively support archives of all kinds to secure the best possible long-term future for their collections. We will help them to identify new funding opportunities and better ways of working. Together we will make the case for archives as a vital part of the nation’s heritage.
                <h3>Goals</h3>
                <ol class="rounded-list">
                    <li><span>Influence the future through a new strategic approach which actively promotes the archival health of the nation</span></li>
                    <li><span>Be a strong advocate for the sector to raise awareness of the importance and potential of archives</span></li>
                    <li><span>Engage and collaborate with other archives to sustain vibrant collections and services</span></li>
                    <li><span>Develop the funding and investment capacity and opportunities of the sector to increase its financial sustainability</span></li>
                    <li><span>Encourage creativity, good practice and the sharing of knowledge through programmes, surveys, tools and guidance</span></li>
                </ol>
            </div>
            <div class="col starts-at-full ends-at-one-third box clr">
                Last year, the Accessions to Repository survey had its largest ever response from archive repositories, local record offices, subject specialist repositories, and universities across the UK and Ireland: a record 304 archives.

                Last year, 26 archive services across the UK gained accreditation via the Archive Service Accreditation scheme. To date, this figure has risen to 32.

                20-year rule: On 1 January 2015, the second phase of the 20-year  rule came into effect, covering the transfer to local places of deposit of records of local interest selected for permanent preservation. Through The National Archives, the Ministry of Justice will administer £7.1 million over 10 years to offset burdens this will place on local authorities.

                We were awarded a new grant of just under £1 million from the Heritage Lottery Fund (HLF), as set out on page 12 under its Skills for the Future programme. This is the strategic HLF fund that gives people the skills they need for future careers in heritage, and opens up heritage to wider audiences.  The grant allows us to run a new project, Transforming Archives, which offers three annual cohorts of trainees the opportunity to develop practical archiving skills.

            </div>
        </section>

        <section class="row" aria-labelledby="academic-tab" role="tabpanel" aria-hidden="false"
                 style="display: block;">
            <div class="col starts-at-full ends-at-two-thirds box clr">
                We will advance knowledge through exemplary academic liaison and outstanding interdisciplinary research
                The National Archives is one of the world’s most valuable resources for academic research. We have strong links with the academic sector and we have set ourselves clear research priorities centred on the challenges we face. Our staff are engaged in collaborative projects on the cutting edge of physical and digital record preservation, historical research and data science. But we believe we can and should do more.
                Over the next four years we will reinvigorate our approach. We will invest in our capacity and skills. We will reinforce our Kew site as a recognised hub for archival research. We will pursue new partnerships and collaborations. We will ensure that in every serious discussion about researching and solving the toughest problems facing the archives sector, we are leading the conversation.
                <h3>Goals</h3>
                <ol class="rounded-list">
                    <li><span>Expand our national and international reputation for pioneering research and collections management in line with our status as an Independent Research Organisation</span></li>
                    <li><span>Enhance our current research reputation to develop funding success</span></li>
                    <li><span>Shape a programme of world class digital research</span></li>
                    <li><span>Establish a renowned research centre to coordinate and galvanise our long-term research programme</span></li>
                    <li><span>Respond to the changing needs of the academic and research sector</span></li>
                </ol>
            </div>
            <div class="col starts-at-full ends-at-one-third box clr">
                Over the last four years, we have taught over 47,000 students on site at Kew, via videoconferencing and our virtual classroom; nearly 3,000 teachers off site at conferences, workshops and teacher training colleges; and over 1,700 different school groups.

                The Arts and Humanities Research Council (AHRC)-funded research project ‘England’s Immigrants 1330-1550’, a new database on immigration in medieval England, was completed in collaboration with the University of York and the Humanities Research Institute at the University of Sheffield. For the first time, researchers can find the details of over 65,000 immigrants who lived in England during this period by name, nationality, profession and place of residence.

                We received a Sandford Award, which is regarded as a trademark for high-quality education provision and is an independently judged, quality- assured assessment of education programmes at heritage sites, museums, archives and collections across the British Isles.

                Our Document Services Department was joint winner of the Industry Volunteer Team Award given by Spark, an education business charity. The award recognised the industry volunteer (or team) that has ‘gone the extra mile’ in supporting education-business partnerships over the past year.

                Over 290,000 images from the State Papers record series dating back to the 18th century were completed as a project for the academic publisher Cengage.

            </div>
        </section>

        <section class="row" aria-labelledby="digital-challenge-tab" role="tabpanel" aria-hidden="false"
                 style="display: block;">
            <div class="col starts-at-full ends-at-two-thirds box clr">
                We will become a digital archive by design
                The National Archives is constantly evolving. Digital technology has changed forever what it means to be an archive and over the last few years we have responded to these changes in ways that have benefitted each of our key audiences. We have created ‘Discovery’ – the first comprehensive national online catalogue. We have constructed a Digital Records Infrastructure capable of holding the future government digital record. We have collaborated on ground-breaking research into working with digital records. Through our pioneering commercial partnerships we have made millions of records available online to a worldwide audience.
                But we know that to meet the needs of our key audiences and guarantee our long-term sustainability we will need to make some important changes to the way we think and work. Over the next four years we will increase our ability to recognise and exploit new digital and commercial opportunities. Wherever we can we will work with the best commercial and non-commercial partners to generate income and give the taxpayer value for money. We will make better use of our data to streamline and enhance our services. We will become a digital archive by instinct and design.
                <h3>Goals</h3>
                <ol class="rounded-list">
                    <li><span>Lead a transformation in how digital records are managed at scale, from creation to presentation</span></li>
                    <li><span>Build partnerships, including with commercial partners, which provide innovative online services to our users</span></li>
                    <li><span>Make ‘Discovery’ the primary destination for anyone wanting to access archives in the UK </span></li>
                    <li><span>Provide platforms and tools which help other archives put more of their collections online</span></li>
                    <li><span>Meet changing customer expectations in a digital world</span></li>
                </ol>
            </div>
            <div class="col starts-at-full ends-at-one-third box clr">
                Discovery our online catalogue provides access to over 30 million descriptions of records, 10 million of which are held in over 2,500 archives across the UK; 22 million of these are in our collection.

                Last year, our documents were downloaded nearly 200 million times.

                On average, over a third of visits to our website are now from portable devices.

                Last year, we published on average over 16 blog posts per month.

                Our Twitter followers have increased to almost 60,000, up by 69% on the previous year.

                Our @UnitWarDiaries and @UKWarCabinet Twitter feeds engaged over 13,000 followers with our documents.

                Over 8 million images were produced from our records by our own in-house digitisation experts, contractors, commercial, non-commercial and academic partners.

                We led on the launch of the Explore Your Archive 2014 campaign via social media, and our Thunderclap reached over 750,000 people online.

                The UK Government Web Archive is used by more than 1 million people every month. We continually maintain and develop our archive of over 3,000 government websites and social media services – by far our largest collection – and an increasingly important part of the Open Government record and transparency agenda. We collected 336 million URLs and preserved an additional 10.3 terabytes of data. There were 29 million visits to UK Government Web Archive.

                During the year we took 1,447 snapshots of websites and social media accounts for the UK Government Web Archive (1,076 in 2013-14).

                ‘Operation War Diary’ won the ‘Best of The Web’ award in the research/collections online category at the Annual Conference of Museums and the Web.

                To date, as part of Operation War Diary, over 12,200 ‘citizen historian’
            </div>
        </section>

    </div>
</div>
<div id="page_wrap" class="container headlines" role="main">
    <!-- Page content -->
    <div class="breather">
        <div class="row">
            <div class="col starts-at-full ends-at-full box clr">
                <hr class="bp-hr"/>
                <ul class="bpTestimonials">
                    <li>
                        Helpful, patient, friendly, obliging, kind, knowledgeable- all these apply to the staff at The National Archives. You made life easier for me, a rank amateur when I began on Wednesday. Towards the end of Friday I am nearly exhausted but pleased with my efforts on my husband's behalf. Thank you all
                        <span>Reader</span>
                    </li>
                    <li>
                        Helpful, patient, friendly, obliging, kind, knowledgeable- all these apply to the staff at The National Archives. You made life easier for me, a rank amateur when I began on Wednesday. Towards the end of Friday I am nearly exhausted but pleased with my efforts on my husband's behalf. Thank you all
                        <span>Reader</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="bp-backBlue">
    <div class="container">
    <div class="breather">
        <div class="row">
            <div class="col starts-at-full ends-at-full">
                <img src="wp-content/themes/tna/images/about/bp-timeline.jpg" />
            </div>
        </div>
    </div>
    </div>
</section>
<div id="page_wrap" class="container" role="main">
    <div class="row">
        <div class="col starts-at-full ends-at-full">
            <h2 class="headlines-align-center">Lorem ipsuim dolor</h2>
        </div>
    </div>
    <div class="row">
        <div class="col starts-at-full ends-at-one-third box clr">
            <img src="wp-content/themes/tna/images/about/bp-img-placeholder.jpg" />
        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
            <br /><br />
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
            <br />  <br />
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
            <br />
            <br />
            <br />
            <a class="button float-right" href="#">Read full plan (PDF)</a>
        </div>
    </div>
</div>
<div id="index" class="row">
    <?php
    for ($i = 1; $i <= 12; $i++) {

        $prefix = 'tna_';

        $title[$i] = get_post_meta($post->ID, $prefix . 'text_' . $i, true);
        $description[$i] = get_post_meta($post->ID, $prefix . 'textarea_' . $i, true);
        $image[$i] = get_post_meta($post->ID, $prefix . 'image_' . $i, true);
        $link[$i] = get_post_meta($post->ID, $prefix . 'link_' . $i, true);

        if (!empty($title[$i])) : ?>
            <div class="col starts-at-full ends-at-half clr box <?php echo $i; ?>">
                <div class="heading-holding-banner">
                    <h2><span><span><a href="<?php echo $link[$i] ?>"><?php echo $title[$i] ?></a> </span></span></h2>
                </div>
                <div class="breather">
                    <a href="<?php echo $link[$i] ?>" title="<?php echo $title[$i] ?>">
                        <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                            <img src="<?php echo $image[$i] ?>"/></div>
                    </a>

                    <p>
                        <?php echo $description[$i] ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>
</div>
</div>
</div>
<!-- end page content -->
<?php

get_footer(); ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    