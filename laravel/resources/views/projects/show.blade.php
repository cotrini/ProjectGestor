<x-layout>
    <x-slot:heading>
        Project View
    </x-slot:heading>
    <div class="space-y-4">
        
                    <strong>
                       Project name: <h1>{{$project['project_name']}}</h1>
                    </strong> 
    
    <div><strong>Description:</strong><p> {{$project['description']}}</p></div>
    </div>
</x-layout>

