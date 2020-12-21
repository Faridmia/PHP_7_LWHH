<?php 
// null safe operator

class Post{

    function __construct(private int $id)
    {
        
    }

    function getTitle(){
        return "Post Title {$this->id}";
    }
}

    function getPost(int $id){
        if($id>100){
            return null;
        }
        return new Post($id);
    }

    $post = getPost(100);
    // if($post != null){
    //     echo $post->getTitle();
    // }else{
    //     echo "Invalid Post...";
    // }

    echo $post?->getTitle() ?? "invalid post";



?>