using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

namespace saru_ecommerce.Models
{
    public class User
    {
        public int UserId { get; set; }
        [Required]
        public string Name { get; set; }
        [Required]
        public string Email { get; set; }
        [Required]
        public string Cpf { get; set; }
        [Required]
        [DataType(DataType.Date)]
        public string BirthDate { get; set; }
        public string Gender { get; set; }
        [Required]
        public string Password { get; set; }
        [Required]
        public string PhoneNumberPrimary { get; set; }
        public string PhoneNumberSecondary { get; set; }
        public List<UserAddress> Adresses { get; set; }
        public List<UserCard> Cards { get; set; }
    }
}