<tr style="border-bottom: 0.5px solid rgb(245, 245, 245)">
    <th scope="row">#{{$i+1}}</th>
    <td class="w-25 p-1"><img src="{{$item['thumb']}}" class="card-img-top object-fit-fill border rounded"
            alt="..." style="height: 100px; width :100px"></td>
    <td class="w-50">{{$item['title']}}</td>
    <td>{{$item['price']}}</td>
    <td>
        <a href="comic/{{$item->id}}" style="text-style:none;">
            <button type="submit" class="badge" style="background-color: black; color: rgb(13, 65, 250)">
                More details
            </button>
        </a> 
        <a href="comic/{{$item->id}}/edit" style=" text-style:none;">
            <button type="submit" class="badge" style="background-color: black; color: rgb(11, 197, 52)">
                Modify
            </button>
        </a> 
    </td>
</tr>