@include('admin.layout.header')

<div class="page-wrapper">
			<div class="page-content">
                <table>
                    <thead>
                        <tr>
                            
                            <td>product name</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                        <tr>
                           
                            <td>{{$item->prdt_name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
@include('admin.layout.footer')