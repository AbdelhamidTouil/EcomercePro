
<div style="text-align: center;padding-bottom:20px;">
    <h1 style="font-size: 30px; text-align:center; padding-top:20px;padding-bottom:20px;"> Comments</h1>
    <form action="{{url('add_comment')}}" method="POST">
       @csrf
       <textarea name="comment" style="width: 80ch;" placeholder="Comment something here"></textarea>
       <br>
       <input type="submit" class="btn btn-primary" value="Comment">
       
    </form>
 </div>
 <div style="padding-left:20ch;">
    <h1 style="font-size: 20px;padding-bottom:20px;">All Comment</h1>
 
 @foreach($comment as $comment)

    <div style=" max-height: 100px;
    overflow: auto;">
       
       <b>{{$comment->name}}</b>
       <p>{{$comment->comment}}</p>
       <a style="color: blue; padding-left:6ch" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
       @foreach($reply as $rep)
       @if($rep->comment_id==$comment->id)
       <div style="padding: 3%;">
          <b>{{$rep->name}}</b>
          <p>{{$rep->reply}}</p>
          <a style="color: blue" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
 
       </div>
       @endif
       @endforeach
      
    </div>
   
  @endforeach
   
    <div style="display: none" class="replyDiv ">
       <form action="{{url('add_reply')}}" method="POST">
          @csrf
       <input type="text" id="commentId" name="commentId" hidden>
       <textarea  cols="30" rows="3" placeholder="reply here" name="reply"></textarea>
       <br>
       
       <button type="submit" class="btn btn-warning">Reply</button>
       <a href="javascript::void(0);" class="btn" onclick="reply_close(this)">Close</a>
    </form>
    </div>
 </div>