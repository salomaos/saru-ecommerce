using Microsoft.EntityFrameworkCore.Migrations;

namespace saru_ecommerce.Migrations
{
    public partial class RememberBool : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AlterColumn<bool>(
                name: "Remember",
                table: "UserCard",
                nullable: false,
                oldClrType: typeof(string),
                oldType: "longtext CHARACTER SET utf8mb4",
                oldNullable: true);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AlterColumn<string>(
                name: "Remember",
                table: "UserCard",
                type: "longtext CHARACTER SET utf8mb4",
                nullable: true,
                oldClrType: typeof(bool));
        }
    }
}
