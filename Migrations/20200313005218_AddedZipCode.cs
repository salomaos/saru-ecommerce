using Microsoft.EntityFrameworkCore.Migrations;

namespace saru_ecommerce.Migrations
{
    public partial class AddedZipCode : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<string>(
                name: "ZipCode",
                table: "UserAdresses",
                nullable: true);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "ZipCode",
                table: "UserAdresses");
        }
    }
}
