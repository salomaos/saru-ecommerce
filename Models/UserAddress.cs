using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace saru_ecommerce.Models {
    public class UserAddress {
        public int Id { get; set; }
        public string ZipCode { get; set; }

        [Required]
        public string Description { get; set; }

        [Required]
        public string Address { get; set; }

        [Required]
        public string Number { get; set; }

        [Required]
        public string Neighborhood { get; set; }

        [Required]
        public string City { get; set; }

        [Required]
        public string State { get; set; }
        public string Complement { get; set; }

        [Required]
        public int UserId { get; set; }
        public User User { get; set; }
    }
}