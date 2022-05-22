@if($evaluation->project)
<a href="{{ Route('evaluation.process') }}?project_id={{ $evaluation->project->id }}" class="nominees-item">
    <div class="nominees-item__number">{{ $loop->iteration }}</div>
    <div class="nominees-item__title">{{ $evaluation->project->name_nominate }}</div>
    @if($evaluation->project->nomination)
    <div class="nominees-item__nomination">{{ $evaluation->project->nomination->name }}</div>
    @endif
    <div class="nominees-item__eval text-semipink">{{ $evaluation->completed ? '+' : '-' }}</div>
</a>
@endif