 <!-- ======= My Resume Section ======= -->
 <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <span>{{$titles[2]->title}}</span>
        <h2>{{$titles[2]->title}}</h2>
        <p>{{$titles[2]->subtitle}}</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resume_subtitles[0]->title}}</h3>
          <div class="resume-item pb-0">
            <h4>{{$resume_summaries->name}}</h4>
            <p><em>{{$resume_summaries->text}}</em></p>
            <p>
            <ul>
              <li>{{$resume_summaries->address}}</li>
              <li>{{$resume_summaries->phone}}</li>
              <li>{{$resume_summaries->email}}</li>
            </ul>
            </p>
          </div>
          <h3 class="resume-title">{{$resume_subtitles[1]->title}}</h3>
          @for ($i = count($education)-1; $i >= 0; $i--)
            <div class="resume-item">
              <h4>{{$education[$i]->title}}</h4>
              <h5>{{$education[$i]->start_date}} {{$education[$i]->end_date? ($education[$i]->end_date != $education[$i]->start_date ? '-'.$education[$i]->end_date : null) : '- Present'}}</h5>
              <p><em>{{$education[$i]->place}}</em></p>
              <p>{{$education[$i]->text}}</p>
            </div>
          @endfor
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">{{$resume_subtitles[2]->title}}</h3>
          @for ($i = count($experiences)-1; $i >=0 ; $i--)
            <div class="resume-item">
              <h4>{{$experiences[$i]->title}}</h4>
              <h5>{{$experiences[$i]->start_date}} {{$experiences[$i]->end_date? ($experiences[$i]->end_date != $experiences[$i]->start_date ? '-'.$experiences[$i]->end_date: null) : '- Present'}}</h5>
              <p><em>{{$experiences[$i]->place}} </em></p>
              <p>
              <ul>
                <li>{{$experiences[$i]->task1}}</li>
                <li>{{$experiences[$i]->task2}}</li>
                <li>{{$experiences[$i]->task3}}</li>
                <li>{{$experiences[$i]->task4}}</li>
              </ul>
              </p>
            </div>
          @endfor
        </div>
      </div>

    </div>
  </section><!-- End My Resume Section -->