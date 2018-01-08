@php
  $access_token= env('INSTAGRAM_ACCESS_TOKEN');
  $photo_count=4;

  $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
  $json_link.="access_token={$access_token}&count={$photo_count}";

  $json = file_get_contents($json_link);
  $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

  foreach ($obj['data'] as $post) {
      $pic_text=$post['caption']['text'];
      $pic_link=$post['link'];
      $pic_like_count=$post['likes']['count'];
      $pic_comment_count=$post['comments']['count'];
      $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
      $pic_created_time=date("F j, Y", $post['caption']['created_time']);
      $pic_created_time=date("F j, Y", strtotime($pic_created_time));

      if (strlen($pic_text) > 75) {
        $pic_text = substr($pic_text, 0, 73) . '...';
      }
      echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12 item-box'>";
        echo "<div class='insta-inner-box'>";
          echo "<a href='{$pic_link}' target='_blank'>";
              echo "<img class='insta-image photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
          echo "</a>";
          echo "<div class='text-content'>";
              echo "<p>";
                  echo "<div class='gray-text'>";
                      echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                  echo "</div>";
              echo "</p>";
              echo "<p>{$pic_text}</p>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
  }
@endphp
