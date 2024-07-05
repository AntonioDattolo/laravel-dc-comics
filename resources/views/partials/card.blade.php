<tr style="border-bottom: 0.5px solid whitesmoke">
    <th scope="row">#{{$i+1}}</th>
    <td class="w-25"><img src="{{$item['thumb']}}" class="card-img-top object-fit-fill border rounded"
            alt="..." style="height: 100px; width :100px"></td>
    <td class="w-50">{{$item['title']}}</td>
    <td>{{$item['price']}}</td>
    <td>
        <a href="index/{{$item->id}}" style="color: greenyellow; text-style:none;">
            <button type="submit" style="background-color: black; color: greenyellow">
                More details
            </button>
        </a> 
        <a href="index/{{$item->id}}/edit" style="color: greenyellow; text-style:none;">
            <button type="submit" style="background-color: black; color: greenyellow">
                Modify
            </button>
        </a> 
    </td>
</tr>