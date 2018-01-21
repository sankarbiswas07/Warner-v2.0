
    <div class="card text-center">
        <div class="card-header">
             <h5> -: Students' Non-academic Feedback :- </h5>
        </div>
        <div class="card-body table-responsive">

        <table class="table table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">Student roll no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Library</th>
                    <th scope="col">Canteen</th>
                    <th scope="col">Hostel</th>
                    <th scope="col">University Relation</th>
                    <th scope="col">Internet Access</th>
                    <th scope="col">Comments on Class & Lab room</th>
                    <th scope="col">Others</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($feeds as $feed)
                  <tr>
                   <!--<th scope="row">{{ $feed->student_roll }}</th> -->
                   <td>{{ $feed->student_roll }}</td>
                   <td>{{ $feed->student_name  }}</td>
                   <td>{{ $feed->library  }}</td>
                   <td>{{ $feed->canteen  }}</td>
                   <td>{{ $feed->hostel  }}</td>
                   <td>{{ $feed->university_relation }}</td>
                   <td>{{ $feed->internet  }}</td>
                   <td>{{ $feed->comments_on_class_lab  }}</td>
                   <td>{{ $feed->others  }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>

        </div>
        <div class="card-footer text-muted">
        thank you
        </div>
    </div>

