@extends('layout')

@section('content')
  <div class="index">
    <div class="center jumbotron"> 
      <div class="searchall"> 
        <h1 class="catch-copy">出会い、そして創造へ</h1> 
        <!-- <% if !(logged_in?) || (current_user.email == "guest@example.com" || current_user.profession == "worker") %> -->
          <!-- <div class="searchall-form">
            <%= form_with url: search_spots_path, local: true, class: "search-pair", method: :get do |form| %>
              <%= form.text_field :keyword, placeholder: "現場を検索する(現場名,地名etc)",class: "search-form" %>
              <%= form.submit "検索", class: "search-btn" %>
            <% end %>
          </div>
        <% end %> -->
        <!-- <% if !(logged_in?) || (current_user.email == "guest@example.com" || current_user.profession == "company") %>
        <div class="searchall-form">
          <%= form_with url: search_users_path, local: true, class: "search-pair", method: :get do |form| %>
            <%= form.text_field :keyword, placeholder: "職人を検索する(職人名,活動エリアetc)",class: "search-form" %>
            <%= form.submit "検索", class: "search-btn" %>
          <% end %>
        </div>
        <% end %> -->
      </div>
    </div>

    <div class="container px-3">
      <div class="row row-cols-1 row-cols-md-2 mx-n5">
        <div class="col px-4">
          <div class="bg-light spots-area">
            <p class="listtitle">新着現場一覧</p>
            <div class="new-spots">
            <!-- <% @spots.first(8).each do |spot| %>
              <%= render spot %>
            <% end %> -->
            </div>
          </div>  
        </div>
        <div class="col px-4">
          <div class="bg-light wokers-area">
            <p class="listtitle">新規職人一覧</p>   
            <div class="new-woker">       
              <!-- <% @users.first(8).each do |user| %>
              <% if user.profession == "worker"%>
                <%= render user %>
              <% end %>
              <% end %> -->
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection