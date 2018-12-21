@extends('makeuplayout.master')


@section('content')
    <div class="w3-hide-small w3-hide-medium">
    <div class="row ">
      <h1 class="about_h1 heading"> <a href="#bridal">Bridal</a> & <a href="#fashion">Fashion</a> </h1>
    </div>
    <section id="bridal">
      <div class="row" >
        <br>
      </div>
      <div class="row">
        <h1 class="about_h1 heading_1">Bridal</h1>
      </div>
      <div class="gallery">
        <div class="row">
          <div class="col-6">
            @foreach($image as $img)
            <img class="port-l"src="{{$img->name}}" alt="">
            @endforeach
          </div>
          <div class="col-6">
            <img class="port-r"src="img\portfolio\img3.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <img class="port-m" src="img\portfolio\img4.jpg" alt="">
        </div>
        <div class="row">
          <div class="col-6">
            <img class="port-l"src="img\portfolio\img5.jpg" alt="">
          </div>
          <div class="col-6">
            <img class="port-r"src="img\portfolio\img6.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <img class="port-m" src="img\portfolio\img7.jpg" alt="">
        </div>
      </div>
    </section>
    <section id="fashion" class="section_gap">
      <br>
      <div class="row">
        <h1 class="about_h1 heading_1">Fashion</h1>
      </div>
      <div class="gallery">
        <div class="row">
          <div class="col-6">
            <img class="port-l"src="img\portfolio\fas1.jpg" alt="">
          </div>
          <div class="col-6">
            <img class="port-r"src="img\portfolio\fas2.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <img class="port-m" src="img\portfolio\fas3.jpg" alt="">
        </div>
        <div class="row">
          <div class="col-6">
            <img class="port-l"src="img\portfolio\fas4.jpg" alt="">
          </div>
          <div class="col-6">
            <img class="port-r"src="img\portfolio\fas5.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <img class="port-m" src="img\portfolio\fas6.jpg" alt="">
        </div>
      </div>
    </section>
  </div>
  <div class="w3-hide-large">
  <div class="row ">
    <h1 class="about_h1 heading-sm"> <a href="#bridal-sm">Bridal</a> & <a href="#fashion-sm">Fashion</a> </h1>
  </div>
  <section id="bridal-sm">
    <div class="row" >
    </div>
    <div class="row">
      <h1 class="about_h1 heading_2">Bridal</h1>
    </div>
    <div class="gallery">
      <div class="row">
        <div class="col-6">
          <img class="port-s"src="img\portfolio\img2.jpg" width="460" height="345" alt="">
        </div>

        <div class="col-6">
          <img class="port-s"src="img\portfolio\img3.jpg" width="460" height="345" alt="">
        </div>      </div>
      <div class="row">
        <img class="port-sm" src="img\portfolio\img4.jpg" width="460" height="345" alt="">
      </div>
      <div class="row">
        <div class="col-6">
          <img class="port-s"src="img\portfolio\img5.jpg" width="460" height="345" alt="">
        </div>
        <div class="col-6">
          <img class="port-s"src="img\portfolio\img6.jpg" width="460" height="345" alt="">
        </div>      </div>
      <div class="row">
        <img class="port-sm" src="img\portfolio\img7.jpg"  width="460" height="345" alt="">
      </div>

  </section>
  <section id="fashion-sm" class="section_gap">
    <br>
    <div class="row">
      <h1 class="about_h1 heading_2">Fashion</h1>
    </div>
    <div class="gallery">
      <div class="row">
        <div class="col-6">
          <img class="port-s" src="img\portfolio\fas1.jpg" width="460" height="345" alt="">
        </div>
        <div class="col-6">
          <img class="port-s" src="img\portfolio\fas2.jpg"  width="460" height="345" alt="">
        </div>
      </div>
      <div class="row">
        <img class="port-sm" src="img\portfolio\fas3.jpg"  width="460" height="345" alt="">
      </div>
      <div class="row">
        <div class="col-6">
          <img class="port-s" src="img\portfolio\fas4.jpg" width="460" height="345" alt="">
        </div>
        <div class="col-6">
          <img class="port-s" src="img\portfolio\fas5.jpg"  width="460" height="345" alt="">
        </div>
      </div>
      <div class="row">
        <img class="port-sm" src="img\portfolio\fas6.jpg"  width="460" height="345"alt="">
      </div>
    </div>
  </section>
</div>
  @endsection