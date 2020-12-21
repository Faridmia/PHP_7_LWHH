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
    // union type use kora hoice function ar pore
    function getPost(int $id): ?Post{
        if($id>100){
            return null;
        }
        return new Post($id);
    }

    $post = getPost(400);
    // if($post != null){
    //     echo $post->getTitle();
    // }else{
    //     echo "Invalid Post...";
    // }

    echo $post?->getTitle() ?? "invalid post";



?>