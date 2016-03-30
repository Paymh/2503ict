@extends('layouts.master')

@section('title')
Your profile
@stop
 
 @section('content')

 <?php $post=
    array( 
          array( 'date'=> '27 Jan 2014', 'message' => 'Random Post 1', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'), 
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 2', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'),
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 3', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'),
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 4', 'image' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'), 
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 5', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'),
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 6', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'), 
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 7', 'image' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'), 
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 8', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'),
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 9', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg'),
          array('date'=> '27 Jan 2014', 'message' => 'Random Post 10', 'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMwujqtvj_ZFj6saCl2EyobcSOxwQH0Uf4WXnNOis0PsC3gCjmbg')); 
    $randNum = rand(1,10); ?>
    
   <div class="container-fluid">
        <div class="col-sm-3">
           
        </div>
        <div class="col-sm-4 text-center">
            <div class="card card-block">
                <h4 class="card-title"><img src="http://www.smh.com.au/ffximage/2005/10/24/shannon_wideweb__430x355,0.jpg" width="125px" height="125px"></h4>
                <p class="card-text">Hey cuz hows it going?</p>
                <p class="card-text"><small class="text-muted">7th September 2015 - 10:00am</small></p>
            </div>
            <div class="card card-block">
                <h4 class="card-title"><img src="http://resources1.news.com.au/images/2011/01/10/1225985/043241-guy-sebastian.jpg" width="125px" height="125px"></h4>
                <p class="card-text">Is it too late to say sorry?</p>
                <p class="card-text"><small class="text-muted">17th September 2015 - 9:31am</small></p>
            </div>
            <div class="card card-block">
                <h4 class="card-title"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD6wQP_cYi4uPgbvuHlXboMeUUj2ULovNZRTjBpdYzpAXiPeDD" width="125px" height="125px"></h4>
                <p class="card-text">Leave my boi alone.</p>
                <p class="card-text"><small class="text-muted">17th September 2015 - 9:32am</small></p>
            </div>
            <?php for ($x=0 ; $x <$randNum; $x++) { ?>
            <div class="card card-block">
                <h4 class="card-title"><img src="<?= $post[$x]['image'] ?>" width="125px" height="125px"></h4>
                <p class="card-text">
                    <?=$post[$x][ 'message']?>
                </p>
                <p class="card-text"><small class="text-muted"><?= $post[$x]['date']?></small></p>
            </div>
            <?php } ?>
        </div>
        <div class="col-sm-5">
        </div>
    </div>
@stop




