using System.ServiceModel;
using calendarApi.Models;
namespace calendarApi.Services;

[ServiceContract]
public interface IEventsServiceContract
{
    
    //[OperationContract]
    //public Task<List<Event>> GetAsync();

    [OperationContract]
    public Task<List<Event?>> GetAsync(string? id);

    [OperationContract]
    public Task CreateAsync(Event newEvent);

    [OperationContract]
    public Task UpdateAsync(string id, Event updatedEvent);

    [OperationContract]
    public Task RemoveAsync(string id);
}