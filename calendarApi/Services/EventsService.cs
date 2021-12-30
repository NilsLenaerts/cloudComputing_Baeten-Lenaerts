using calendarApi.Models;
using Microsoft.Extensions.Options;
using MongoDB.Driver;

namespace calendarApi.Services;

public class EventsService : IEventsServiceContract
{
    private readonly IMongoCollection<Event> _eventsCollection;

    public EventsService(IOptions<CalendarDatabaseSettings> calendarDatabaseSettings)
    {
        var mongoClient = new MongoClient(calendarDatabaseSettings.Value.ConnectionString);
        var mongoDatabase = mongoClient.GetDatabase(calendarDatabaseSettings.Value.DatabaseName);
        _eventsCollection = mongoDatabase.GetCollection<Event>(calendarDatabaseSettings.Value.EventsCollectionName);
    }
    /*public async Task<List<Event>> GetAsync() =>
        await _eventsCollection.Find(_ => true).ToListAsync();*/

    public async Task<List<Event?>> GetAsync(string? id){
        List<Event?> EventList = new List<Event?>();
        if(string.IsNullOrEmpty(id)){
            EventList = await _eventsCollection.Find(_ => true).ToListAsync();
            return EventList;
            
            
        }else{
            
            Console.WriteLine(id);
            if(CheckHex(id)){
                EventList.Add(await _eventsCollection.Find(x => x.Id == id).FirstOrDefaultAsync());
                return EventList;
            }
            EventList.Add(null);
            return EventList;
            
        }
        
    }
        

    public async Task CreateAsync(Event newEvent) =>
        await _eventsCollection.InsertOneAsync(newEvent);

    public async Task UpdateAsync(string id, Event updatedEvent) =>
        await _eventsCollection.ReplaceOneAsync(x => x.Id == id, updatedEvent);

    public async Task RemoveAsync(string id) =>
        await _eventsCollection.DeleteOneAsync(x => x.Id == id);

    private bool CheckHex(string id){
        if (id.Length != 24){
            Console.WriteLine("Not right Size " + id.Length);
            return false;
        }
        foreach(char c in id){
            if ((c < '0' || c > '9') &&
            (c < 'a' || c > 'f'))
            {
            Console.WriteLine("not right char " + c);
            return false;
            }
        }
        
        
        return true;
    }
}