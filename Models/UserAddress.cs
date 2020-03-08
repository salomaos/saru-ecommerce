namespace saru_ecommerce.Models
{
    public class UserAddress
    {
        public int Id { get; set; }
        public string Description { get; set; }
        public string Address { get; set; }
        public string Number { get; set; }
        public string Neighborhood { get; set; }
        public string City { get; set; }
        public string State { get; set; }
        public string Complement { get; set; }
    }
}