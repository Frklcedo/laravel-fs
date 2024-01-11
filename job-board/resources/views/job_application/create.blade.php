<x-layout>
    <x-breadcrumbs class="mb-4"
                   :links="['Jobs' => route('jobs.index'), $job->title => route('jobs.show', $job), 'Apply' => '#']"
        />

        <x-job-card class="mb-4" :$job />
    <x-card>
        <h2 class="mb-4 text-lg font-medium">
            Your job application

            <form action="{{ route('job.application.store', $job) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2 text-sm text-slate-900 font-medium" for="expected_salary">Expected Salary</label>
                    <x-text-input type="number" name="expected_salary" />
                </div>
                <x-button class="w-full">Apply</x-button>
            </form>
        </h2>
    </x-card>
</x-layout>
