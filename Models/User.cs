namespace saru_ecommerce.Models
{
    public class User
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Email { get; set; }        
        public string Cpf { get; set; }
        public string BirthDate { get; set; }
        public string Gender { get; set; }
        public string Password { get; set; }
        public string PhoneNumberPrimary { get; set; }
        public string PhoneNumberSecondary { get; set; }
    }
}