<select name="{{ $name_attribute ?? 'channel_id' }}" id="{{ $name_attribute ?? 'channel_id' }}" >
    @foreach($channels as $channel)
        <option value="{{ $channel->name }}"> {{ $channel->name }}</option>
    @endforeach
</select>
