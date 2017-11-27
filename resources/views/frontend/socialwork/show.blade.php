@extends('layouts.master')

@section('title')
    IHSS - Programs & Services
@endsection

@section('content')
<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('images/law.jpg') }});">
        <div class="desc animate-box">
            <h2><strong>Social </strong> Work and Law</h2>
            <span>Far far away, behind the word mountains</span>
        </div>
    </div>

</div>

<div id="fh5co-content-section" class="fh5co-section-gray">
    <div class="container">
        <div class="joblisting">
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="title-job">
                                <h3>The Child and Youth Welfare Code</h3>
                                <p>Presidential Decree No. 603</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 loc-job">
                    <p>Article 1. Declaration of Policy. - The Child is one of the most important assets of the nation. Every effort should be exerted to promote...</p>
                </div>
                <div class="col-sm-3 btn-job">
                    <p class="text-center">
                        <a href="http://pcw.gov.ph/sites/default/files/documents/laws/presidential_decree_603.pdf" target="_blank" class="footer-btn blu-btn" title="">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="joblisting">
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="title-job">
                                <h3>Anti-Violence Against Women and Their Children Act of 2004</h3>
                                <p>Republic Act 9262 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 loc-job">
                    <p>The law allows women and their children to secure barangay protection order and/or temporary or permanent protection order from the courts.</p>
                </div>
                <div class="col-sm-3 btn-job">
                    <p class="text-center">
                        <a href="http://pcw.gov.ph/law/republic-act-9262" target="_blank" class="footer-btn blu-btn" title="">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="joblisting">
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="title-job">
                                <h3>Family Code of the Philippines</h3>
                                <p>Executive Order No. 209 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 loc-job">
                    <p>Article 1. Marriage is a special contract of permanent union between a man and a woman entered into in accordance with law for the establishment of conjugal...</p>
                </div>
                <div class="col-sm-3 btn-job">
                    <p class="text-center">
                        <a href="http://www.officialgazette.gov.ph/1987/07/06/executive-order-no-209-s-1987/" target="_blank" class="footer-btn blu-btn" title="">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="joblisting">
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="title-job">
                                <h3>Juvenile Delinquency Law</h3>
                                <p>Republic Act No. 9344</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 loc-job">
                    <p>Section 1. Short Title and Scope. - This Act shall be known as the "Juvenile Justice and Welfare Act of 2006." It shall cover the different stages involving...</p>
                </div>
                <div class="col-sm-3 btn-job">
                    <p class="text-center">
                        <a href="http://www.lawphil.net/statutes/repacts/ra2006/ra_9344_2006.html" target="_blank" class="footer-btn blu-btn" title="">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="joblisting">
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-job">
                                <h3>Convention on the Rights of the Child</h3>
                                <p>Geneva Declaration of the Rights of the Child of 1924 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 loc-job">
                    <p>The Philippines is submitting as one consolidated document its third and fourth periodic reports on the implementation of the Convention on the Rights of the Child.</p>
                </div>
                <div class="col-sm-3 btn-job">
                    <p class="text-center">
                        <a href="http://www.refworld.org/pdfid/49faa73f2.pdf" target="_blank" class="footer-btn blu-btn" title="">Learn More</a>
                    </p>
                </div>
            </div>
        </div>

        <br>
        <ul class="pager">
            <li class="previous disabled"><a href="#">&larr; Previous</a>
            </li>
            <li class="next"><a href="#">Next &rarr;</a>
            </li>
        </ul>
    </div>
</div>

@stop
