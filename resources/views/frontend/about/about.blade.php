@extends('frontend.layout.layout')


@section('header')
    @include('frontend.includes.header')
@endsection

@section('content')

    @include('frontend.about.components.breadcrumb_about')




    <section class="company-description">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                    <img src="images/about/about-company.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Why We are Different</h3>
                        <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="team">
        <div class="container">
            <div class="row">
                <h2 class="subtitle text-center">Meet The Team</h2>
                <div class="col-md-3">
                    <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                        <div class="team-img">
                            <img src="images/team/team-1.jpg" class="team-pic" alt="">
                        </div>
                        <h3 class="team_name">Jonathon Andrew</h3>
                        <p class="team_designation">CEO, Project Manager</p>
                        <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        <p class="social-icons">
                            <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <div class="team-img">
                            <img src="images/team/team-2.jpg" class="team-pic" alt="">
                        </div>
                        <h3 class="team_name">Jesmin Martina</h3>
                        <p class="team_designation">CEO, Project Manager</p>
                        <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                        <p class="social-icons">
                            <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                        <div class="team-img">
                            <img src="images/team/team-3.jpg" class="team-pic" alt="">
                        </div>
                        <h3 class="team_name">Deu John</h3>
                        <p class="team_designation">CEO, Project Manager</p>
                        <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                        <p class="social-icons">
                            <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                        <div class="team-img">
                            <img src="images/team/team-4.jpg" class="team-pic" alt="">
                        </div>
                        <h3 class="team_name">Anderson Martin</h3>
                        <p class="team_designation">CEO, Project Manager</p>
                        <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                        <p class="social-icons">
                            <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                            <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    @include('frontend.includes.footer')
@endsection