<x-layout>
  <x-slot:title>Job Description</x-slot:title>
  <h2 class="font-bold text-lg">{{$job['title']}}</h2>
  <p>This job pays {{$job['salary']}} per year. (Arr)</p>
  <p>This job pays {{$job->salary}} per year. (Obj)</p>
</x-layout>
