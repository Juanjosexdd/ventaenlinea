@props(['producto'])


<article class="card">
    <img class="h-36 w-full object-cover" src="{{Storage::url($producto->image->url)}}" alt="">
    
    <div class="card-body">
        
        <h1 class="card-title"> {{Str::limit($producto->nombre, 40)}} </h1>
        <p>Precio : {{number_format($producto->precio_venta+$producto->impuesto->impuesto/100,2)}} </p>
        
        <div class="flex justify-center mt-4">
            <a href="" type="submit" class="btn-block mt-4 btn btn-primary">Comprar</a>
    </div>
</article>