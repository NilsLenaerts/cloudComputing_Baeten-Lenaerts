using calendarApi.Models;
using calendarApi.Services;
using Microsoft.AspNetCore.Mvc;

namespace calendarApi.Controllers;

[ApiController]
[Route("api/[controller]")]
public class EventsController : ControllerBase
{
    private readonly EventsService _EventsService;

    public EventsController(EventsService EventsService) =>
        _EventsService = EventsService;

    [HttpGet]
    public async Task<List<Event>> Get() =>
        await _EventsService.GetAsync();

    [HttpGet("{id:length(24)}")]
    public async Task<ActionResult<Event>> Get(string id)
    {
        var Event = await _EventsService.GetAsync(id);

        if (Event is null)
        {
            return NotFound();
        }

        return Event;
    }

    [HttpPost]
    public async Task<IActionResult> Post(Event newEvent)
    {
        await _EventsService.CreateAsync(newEvent);

        return CreatedAtAction(nameof(Get), new { id = newEvent.Id }, newEvent);
    }

    [HttpPut("{id:length(24)}")]
    public async Task<IActionResult> Update(string id, Event updatedEvent)
    {
        var Event = await _EventsService.GetAsync(id);

        if (Event is null)
        {
            return NotFound();
        }

        updatedEvent.Id = Event.Id;

        await _EventsService.UpdateAsync(id, updatedEvent);

        return NoContent();
    }

    [HttpDelete("{id:length(24)}")]
    public async Task<IActionResult> Delete(string id)
    {
        var Event = await _EventsService.GetAsync(id);

        if (Event is null)
        {
            return NotFound();
        }
        if (Event.Id is null)
        {
            return NotFound();
        }

        await _EventsService.RemoveAsync(Event.Id);

        return NoContent();
    }
}