<x-layout title="Job Listings">
  <div class="space-y-4">
    @foreach($jobs as $job)
      <a
        href="/jobs/{{$job['id']}}"
        class="block px-4 py-6 border border-gray-200 rounded-sm"
      >
        <div class="font-bold text-blue-500">{{$job->employer->name}}</div>
        <div>
          <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year.
        </div>
      </a>
    @endforeach
  </div>
</x-layout>
