@extends('layouts.frontend.main')

@section('content')
<main>

        <!-- pageBdWrapNav -->
        <nav class="pageBdWrapNav bg-light" aria-label="breadcrumb">
            <div class="container">
                <div class="row align-items-md-center">
                    <div class="col-12 col-md-7">
                        <!-- breadcrumb -->
                        <ol class="breadcrumb pageBreadcrumb m-0 p-0 text-capitalize">
                            <li class="breadcrumb-item">
                                <a href="home.html">
                                    <i class="fas fa-home icn"><span class="sr-only">icon</span></i>
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Disclaimer</strong>
                    </div>
                </div>
            </div>
        </nav>
        <!-- contactAreaBlock -->


        <!-- contactAreaBlock -->
        <section class="contactAreaBlock contentBlock">
            <div class="container">
                <p>The information provided <strong><a href="http://www.harrisonlocks.com">www.harrisonlocks.com</a> (&ldquo;we&rdquo;, &ldquo;us&rdquo; or &ldquo;our&rdquo; on <a href="http://www.harrisonlocks.com">www.harrisonlocks.com</a></strong>(the &ldquo;Site&rdquo;) [and our mobile application] is for general informational purposes only. All information on the site [and our mobile application] is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, validity, reliability, availability or completeness&nbsp; or any information on the site [or our mobile application].</p>
<p>Under no circumstances shall we have any liability to you or anyone for any loss or damage of any kind incurred as a result of the use of the site [or our mobile application] or reliance on any information provided on the site [and our mobile application]. Your use of the site [and our mobile application] and your reliance on any information on the site [and our mobile application] is solely at your own risk.</p>
<p>External links Disclaimer for WEBSITE The site [and our mobile application] may contain or you may be sent through the site [or our mobile application] links to other websites or content belonging to or originating from third parties por links to websites and features in banners or other advertising. Such external links are not investigated, monitored or checked for accuracy, adequacy, validity, relaiability, availability or completeness by us.</p>
            </div>
        </section>

    </main>

@endsection