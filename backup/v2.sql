USE [master]
GO
CREATE DATABASE [CheckPoint]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'CheckPoint', FILENAME = N'C:\database\CheckPoint.mdf' , SIZE = 4096KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'CheckPoint_log', FILENAME = N'C:\database\CheckPoint_log.ldf' , SIZE = 1024KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [CheckPoint] SET COMPATIBILITY_LEVEL = 110
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [CheckPoint].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [CheckPoint] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [CheckPoint] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [CheckPoint] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [CheckPoint] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [CheckPoint] SET ARITHABORT OFF 
GO
ALTER DATABASE [CheckPoint] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [CheckPoint] SET AUTO_CREATE_STATISTICS ON 
GO
ALTER DATABASE [CheckPoint] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [CheckPoint] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [CheckPoint] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [CheckPoint] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [CheckPoint] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [CheckPoint] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [CheckPoint] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [CheckPoint] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [CheckPoint] SET  DISABLE_BROKER 
GO
ALTER DATABASE [CheckPoint] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [CheckPoint] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [CheckPoint] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [CheckPoint] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [CheckPoint] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [CheckPoint] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [CheckPoint] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [CheckPoint] SET RECOVERY FULL 
GO
ALTER DATABASE [CheckPoint] SET  MULTI_USER 
GO
ALTER DATABASE [CheckPoint] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [CheckPoint] SET DB_CHAINING OFF 
GO
ALTER DATABASE [CheckPoint] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [CheckPoint] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
USE [CheckPoint]
GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[action_plan](
	[action_plan_ID] [int] NOT NULL,
	[ini_date] [datetime2](7) NOT NULL,
	[due_date] [datetime2](7) NOT NULL,
	[prioritization_ID] [int] NOT NULL,
	[assessment_ID] [int] NOT NULL,
	[action_plan_owner] [nvarchar](100) NOT NULL,
	[jira_ticket] [nvarchar](500) NOT NULL,
 CONSTRAINT [PK_action_plan] PRIMARY KEY CLUSTERED 
(
	[action_plan_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[assessment](
	[assessment_ID] [int] NOT NULL,
	[inicial_date] [datetime2](7) NOT NULL,
	[final_date] [datetime2](7) NOT NULL,
	[team_ID] [int] NOT NULL,
	[user_name] [nvarchar](100) NOT NULL,
	[quest_ID] [int] NOT NULL,
	[status] [nchar](1) NOT NULL,
	[general_comments] [nchar](10) NULL,
 CONSTRAINT [PK_assessment] PRIMARY KEY CLUSTERED 
(
	[assessment_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[assessment_result](
	[assessment_result_ID] [int] NOT NULL,
	[assessment_ID] [int] NOT NULL,
	[overall_rating] [nvarchar](60) NOT NULL,
	[overall_score] [numeric](3, 2) NOT NULL,
 CONSTRAINT [PK_assessment_result] PRIMARY KEY CLUSTERED 
(
	[assessment_result_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[category_result](
	[id_actegoryResult] [int] NOT NULL,
	[assessment_result_ID] [int] NOT NULL,
	[mat_cat_ID] [int] NOT NULL,
	[mat_lev_ID] [int] NOT NULL
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[maturity_category](
	[mat_cat_ID] [int] NOT NULL,
	[mat_cat_name] [nvarchar](60) NOT NULL,
	[quest_ID] [int] NOT NULL,
 CONSTRAINT [PK_maturity_category] PRIMARY KEY CLUSTERED 
(
	[mat_cat_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[maturity_level](
	[mat_lev_ID] [int] NOT NULL,
	[mat_lev_name] [nvarchar](60) NOT NULL,
	[quest_ID] [int] NOT NULL,
 CONSTRAINT [PK_maturity_level] PRIMARY KEY CLUSTERED 
(
	[mat_lev_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[modification_data](
	[mod_data_ID] [int] NOT NULL,
	[assessment_ID] [int] NOT NULL,
	[date] [datetime2](7) NOT NULL,
	[user_name] [nvarchar](100) NOT NULL,
 CONSTRAINT [PK_modification_data] PRIMARY KEY CLUSTERED 
(
	[mod_data_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[optionResult](
	[id_optionRes] [int] NOT NULL,
	[quest_ID] [int] NOT NULL,
	[question_ID] [int] NOT NULL,
	[options] [nvarchar](10) NOT NULL,
 CONSTRAINT [PK_optionResult] PRIMARY KEY CLUSTERED 
(
	[id_optionRes] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[prioritization](
	[prioritization_ID] [int] NOT NULL,
	[prioritization_name] [nvarchar](10) NOT NULL,
	[num_days] [nchar](2) NOT NULL,
 CONSTRAINT [PK_prioritization] PRIMARY KEY CLUSTERED 
(
	[prioritization_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[question](
	[question_ID] [int] NOT NULL,
	[quest_ID] [int] NOT NULL,
	[question] [nvarchar](500) NOT NULL,
	[question_guide] [nvarchar](500) NOT NULL,
	[question_display] [numeric](5, 0) NOT NULL,
	[mat_cat_ID] [int] NOT NULL,
	[mat_lev_ID] [int] NOT NULL,
	[question_weight] [nchar](2) NULL,
	[question_floor_verif] [nchar](1) NULL,
 CONSTRAINT [PK_question] PRIMARY KEY CLUSTERED 
(
	[question_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[question_result](
	[question_result_ID] [int] NOT NULL,
	[assessment_ID] [int] NOT NULL,
	[question_ID] [int] NOT NULL,
	[question_result] [nchar](1) NOT NULL,
	[question_comment] [nvarchar](500) NULL,
 CONSTRAINT [PK_question_result_1] PRIMARY KEY CLUSTERED 
(
	[question_result_ID] ASC,
	[assessment_ID] ASC,
	[question_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[questionary](
	[quest_ID] [int] NOT NULL,
	[quest_type] [nvarchar](50) NOT NULL,
	[quest_desc] [nvarchar](250) NULL,
 CONSTRAINT [PK_questionary] PRIMARY KEY CLUSTERED 
(
	[quest_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[team](
	[team_ID] [int] NOT NULL,
	[team_name] [nvarchar](60) NOT NULL,
	[team_localization] [nvarchar](60) NOT NULL,
	[team_region] [nvarchar](60) NOT NULL,
	[team_creation_date] [date] NOT NULL,
	[team_capability] [nvarchar](250) NOT NULL,
	[team_process] [nvarchar](250) NOT NULL,
	[team_focal] [nvarchar](60) NOT NULL,
	[team_contract] [nvarchar](60) NOT NULL,
	[team_client] [nvarchar](60) NOT NULL,
	[team_dm] [nvarchar](60) NOT NULL,
	[team_oe] [nvarchar](60) NOT NULL,
 CONSTRAINT [PK_team] PRIMARY KEY CLUSTERED 
(
	[team_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[user](
	[users_name] [nvarchar](100) NOT NULL,
	[user_team] [nvarchar](60) NOT NULL,
	[role_ID] [int] NOT NULL,
	[user_position] [nvarchar](60) NOT NULL,
	[user_status] [nchar](1) NOT NULL,
 CONSTRAINT [PK_user] PRIMARY KEY CLUSTERED 
(
	[users_name] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[user_role](
	[role_ID] [int] NOT NULL,
	[role_name] [nvarchar](50) NOT NULL,
	[role_desc] [nvarchar](350) NULL,
 CONSTRAINT [PK_user_role_1] PRIMARY KEY CLUSTERED 
(
	[role_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (1, N'Focus', 1)
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (2, N'Standardize', 1)
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (3, N'Plan', 1)
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (4, N'Organize', 1)
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (5, N'Visualize', 1)
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (6, N'Improve', 1)
INSERT [dbo].[maturity_category] ([mat_cat_ID], [mat_cat_name], [quest_ID]) VALUES (7, N'Funcina', 2)
INSERT [dbo].[maturity_level] ([mat_lev_ID], [mat_lev_name], [quest_ID]) VALUES (1, N'Not stable', 1)
INSERT [dbo].[maturity_level] ([mat_lev_ID], [mat_lev_name], [quest_ID]) VALUES (2, N'Stable', 1)
INSERT [dbo].[maturity_level] ([mat_lev_ID], [mat_lev_name], [quest_ID]) VALUES (3, N'Capable', 1)
INSERT [dbo].[maturity_level] ([mat_lev_ID], [mat_lev_name], [quest_ID]) VALUES (4, N'Optimized  Gen4', 1)
INSERT [dbo].[maturity_level] ([mat_lev_ID], [mat_lev_name], [quest_ID]) VALUES (5, N'Nivel1', 2)
INSERT [dbo].[maturity_level] ([mat_lev_ID], [mat_lev_name], [quest_ID]) VALUES (6, N'Nivel2', 2)
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (1, 1, 1, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (2, 1, 1, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (3, 1, 2, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (4, 1, 2, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (5, 1, 3, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (6, 1, 3, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (7, 1, 3, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (8, 1, 4, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (9, 1, 4, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (10, 1, 5, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (11, 1, 5, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (12, 1, 6, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (13, 1, 6, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (14, 1, 7, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (15, 1, 7, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (16, 1, 8, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (17, 1, 8, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (18, 1, 9, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (19, 1, 9, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (20, 1, 10, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (21, 1, 10, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (22, 1, 11, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (23, 1, 11, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (24, 1, 12, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (25, 1, 12, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (26, 1, 13, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (27, 1, 13, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (28, 1, 14, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (29, 1, 14, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (30, 1, 14, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (31, 1, 15, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (32, 1, 15, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (33, 1, 16, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (34, 1, 16, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (35, 1, 17, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (36, 1, 17, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (37, 1, 18, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (38, 1, 18, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (39, 1, 19, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (40, 1, 19, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (41, 1, 20, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (42, 1, 20, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (43, 1, 21, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (44, 1, 21, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (45, 1, 22, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (46, 1, 22, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (47, 1, 23, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (48, 1, 23, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (49, 1, 24, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (50, 1, 24, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (51, 1, 25, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (52, 1, 25, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (53, 1, 26, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (54, 1, 26, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (55, 1, 27, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (56, 1, 27, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (57, 1, 28, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (58, 1, 28, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (59, 1, 29, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (60, 1, 29, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (61, 1, 30, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (62, 1, 30, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (63, 1, 31, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (64, 1, 31, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (65, 1, 31, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (66, 1, 32, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (67, 1, 32, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (68, 1, 32, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (69, 1, 33, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (70, 1, 33, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (71, 1, 34, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (72, 1, 34, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (73, 1, 34, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (74, 1, 35, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (75, 1, 35, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (76, 1, 36, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (77, 1, 36, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (78, 1, 37, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (79, 1, 37, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (80, 1, 38, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (81, 1, 38, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (82, 1, 39, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (83, 1, 39, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (84, 1, 39, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (85, 1, 40, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (86, 1, 40, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (87, 1, 41, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (88, 1, 41, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (89, 1, 42, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (90, 1, 42, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (91, 1, 43, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (92, 1, 43, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (93, 1, 44, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (94, 1, 44, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (95, 1, 45, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (96, 1, 45, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (97, 1, 46, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (98, 1, 46, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (99, 1, 47, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (100, 1, 47, N'No')
GO
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (101, 1, 48, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (102, 1, 48, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (103, 1, 49, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (104, 1, 49, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (105, 1, 50, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (106, 1, 50, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (107, 1, 51, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (108, 1, 51, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (109, 1, 52, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (110, 1, 52, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (111, 1, 53, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (112, 1, 53, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (113, 1, 53, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (114, 1, 54, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (115, 1, 54, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (116, 1, 55, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (117, 1, 55, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (118, 1, 56, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (119, 1, 56, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (120, 1, 56, N'N/A')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (121, 1, 57, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (122, 1, 57, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (123, 1, 58, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (124, 1, 58, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (125, 1, 59, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (126, 1, 59, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (127, 1, 60, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (128, 1, 60, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (129, 1, 61, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (130, 1, 61, N'No')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (131, 1, 62, N'Yes')
INSERT [dbo].[optionResult] ([id_optionRes], [quest_ID], [question_ID], [options]) VALUES (132, 1, 62, N'No')
INSERT [dbo].[prioritization] ([prioritization_ID], [prioritization_name], [num_days]) VALUES (1, N'High', N'30')
INSERT [dbo].[prioritization] ([prioritization_ID], [prioritization_name], [num_days]) VALUES (2, N'Low', N'90')
INSERT [dbo].[prioritization] ([prioritization_ID], [prioritization_name], [num_days]) VALUES (3, N'Medium', N'60')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (1, 1, N'Team understands the Customer / expected Outcomes and is able to articulate the main activities performed end to end.', N'Team understands the SLA''s & KPI''s for delivery . Team also is able to explain the SIPOC & HLPM', CAST(1 AS Numeric(5, 0)), 1, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (2, 1, N'Process documentation (SIPOC, HLPM, control plan, risk and issue log, FMEA, etc) is in place, is current and version controlled', N'Check the sharepoint for relevant documents and version controlling', CAST(2 AS Numeric(5, 0)), 1, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (3, 1, N'Current and complete OLA''s have been agreed with client (If Applicable) ', N'Check whether OLA''s are available where needed, documented and Team lead understands them', CAST(3 AS Numeric(5, 0)), 1, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (4, 1, N'Trend Chart / Control Charts are in Place for key Metrics ', N'Check agreed visual method for Control charts and trend charts identified in 3x3', CAST(4 AS Numeric(5, 0)), 1, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (5, 1, N'3x3s are being used with the correct format', N'3x3 should have Y''s identified under Speed, Quality and Cost with relevant X''s that impact Y''s', CAST(5 AS Numeric(5, 0)), 1, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (6, 1, N'3x3 exists detailing Client success measures (SLAs), Voice of the Customer (VOC) (wherever applicable) and are updated within agreed frequency. ', N'Check the frequency of updating 3x3 metrics / control charts in accordance to data availability and the Data Collection Plan  (daily / weekly / Monthly / Quarterly)', CAST(6 AS Numeric(5, 0)), 1, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (7, 1, N'Management Operating System (MOS) and Escalation Matrix is in place and current', N'Check the OE documentation for the agreed MOS and validity of Escalation Mlan. Both documents should be current', CAST(14 AS Numeric(5, 0)), 2, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (8, 1, N'Critical Process or Deal documents are available. Changes are reviewed and signed off by the SDL every quarter (or agreed frequency)', N'Check the document Version Controls. Review evidence of SDO Leadership (SDL) confirmation of document update and sign off', CAST(15 AS Numeric(5, 0)), 2, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (9, 1, N'A Control Framework has been implemented (where applicable) and used to agreed frequency (ideally daily). Controls are revalidated quarterly', N'A version of the Accenture Control framework has been implemented and control status updated on a daily (or agreed frequency) basis. Validate the date of adding new controls', CAST(16 AS Numeric(5, 0)), 2, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (10, 1, N'Teams have implemented a Quality Framework (where applicable) for tracking accuracy of processes, quality reporting and identification of improvement actions and follow through', N'Check whether Quality Framework provides performance reports on regular basis at an agreed frequency. Also check whethert Quality Scores are presented as element of the MOS', CAST(17 AS Numeric(5, 0)), 2, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (11, 1, N'SWIs / LWI''s / DTPs / Process Checklists are being used by the teams', N'Check whether Process material / Process Checklists are available at the workstation or in a Sharepoint', CAST(18 AS Numeric(5, 0)), 2, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (12, 1, N'Risk Management process exists, is updated at regular (agreed frequency) intervals. Team Leads are able to articulate key Risks & preventative Controls within the process', N'Check the FMEA to ensure all identified risks have been updated, (verify if new risks are identified by date) and displayed as per the Visual Management Plan', CAST(19 AS Numeric(5, 0)), 2, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (13, 1, N'Targets for team member clearly defined and driven on a daily basis (where possible) (ie, TAT, Productivity, Quality, Utilization etc)', N'Clearly defined individual targets for production / quality are displayed as per Visual Management Plan (white boards for Delivery Centres or as per VM Plan for onshore or Client sites)', CAST(27 AS Numeric(5, 0)), 3, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (14, 1, N'Utilization is measured on a daily basis using ACMS or other productivity / utilisation tools', N'ACMS or alternative utilization tool is implemented and reports being reviewed by Team Lead or SDL', CAST(28 AS Numeric(5, 0)), 3, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (15, 1, N'Office appears well organized upon visual inspection with no sign of clutter on desks or in the work space', N'Workstations should be free of unwanted documents or papers etc.', CAST(37 AS Numeric(5, 0)), 4, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (16, 1, N'Teams understand where things are and what is needed to complete their work effectively ', N'Teams are aware of critical documents (SWI & DTP''s) and can be accessed in the production enviornment', CAST(38 AS Numeric(5, 0)), 4, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (17, 1, N'Teams use the standard Visual Management Framework for demonstrating "health of the process"', N'Check the available Visual Management (boards and virtual) against the Deal VM Plan and standard Visual Management Framework. 
Check for updated and current 3x3, control charts, Root Cause Aanalysis tools & mitigation plan (if needed), HLPM, SIPOC, FMEA, We@A Plan (if applicable)', CAST(43 AS Numeric(5, 0)), 5, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (18, 1, N'Performance data is clearly displayed over time using control charts to identify and react to trends and understand performance against service and SLA expectations ', N'Visual display of control charts should be updated with the latest information based on the frequency of the data being tracked', CAST(44 AS Numeric(5, 0)), 5, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (19, 1, N'Visual display are used to discuss past performance and future expectations of performance and/or work allocation by priority and tasks etc ', N'Participation within the Team huddle to understand if displayed / virtual team metrics are being used for performance discussions / setting expectations', CAST(45 AS Numeric(5, 0)), 5, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (20, 1, N'Escalation Matrix to handle Client issues is current and displayed prominently', N'Check that the Detailed Level Process Maps and Escalation Matrix are current and displayed as per VM Plan or where applicable, (ie, a Deal with 20+ processes may not be able to display the DLPMs)', CAST(46 AS Numeric(5, 0)), 5, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (21, 1, N'Basic Root Cause Analysis methods used for any performance misses are discussed and displayed prominently (where applicable)', N'Check the wall displays or virtual displays for RCA and Mitigation Plan for any misses within the Performance metrics', CAST(52 AS Numeric(5, 0)), 6, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (22, 1, N'Teams know the current baseline performance of the process and have targets in place to improve performance', N'Team is aware of the baseline performance for all Critical Metrics. Team Lead / SDL has a Performance Improvement Plan in place ', CAST(53 AS Numeric(5, 0)), 6, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (23, 1, N'Teams have demonstrated that they have driven continuous improvement through We@Accenture, productivity or metric improvement projects / initiatives etc', N'Check ideas submitted / implemented and team awareness of We@Accenture. Talk through improvement projects that are in flight', CAST(54 AS Numeric(5, 0)), 6, 2, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (24, 1, N'Teams are able to predict there ability to meet service expectations using control charts to understand any variation in customer experience by measuring daily rather than average performance', N'Check for frequency of control charts and relevant action plan in case there are any misses. Check for improvement actions where the data has been used to predict a performance concern', CAST(7 AS Numeric(5, 0)), 1, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (25, 1, N'Team is operating within Original Deal Economics and are consistently meeting service expectations', N'All SLA''s are being achieved (evidennce of Client sign off is available for any SLA waiver or relaxation). Check performance against ODE with SDL and challenge any reason for deviation (if applicable)', CAST(8 AS Numeric(5, 0)), 1, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (26, 1, N'Teams ensure that the 3x3 is updated as per client business changes', N'Check if any new SLA / Client VOC is being tracked on the 3x3', CAST(9 AS Numeric(5, 0)), 1, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (27, 1, N'SWIs have standard processing times calculated through scientific means or a Time in Motion (TiM) study and are based weighted averages instead of simple averages', N'Detailed TiM has been conducted within the last 12 months (step by step) to identify and improve standard processing times. Also leverege the standard time computed during the Solutioning (if applicable)', CAST(20 AS Numeric(5, 0)), 2, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (28, 1, N'Team has demonstrated reduction of the standard processing times and / or improved productivity per person on a yearly basis', N'Conduct & compare standard processing times on an annual basis (priortize deals with Fixed Price / Volume based billing)', CAST(21 AS Numeric(5, 0)), 2, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (29, 1, N'Team reviews Seat Utilisation / FTE Pyramid and aims to rationalise every six months', N'Review Seat Utilisation and Pyramid rationalisation opportunities through cross skilling, process automation & other process improvements indentified on the Improvement Plan (wherever possible)', CAST(22 AS Numeric(5, 0)), 2, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (30, 1, N'MOR and MOS structure is defined for all levels with the effective use of the available data ie, leading and lagging metrics (3x3)', N'Team have incorporated past trend analysis based on Control Charts and 3x3 metrics in the MOS and MOR', CAST(23 AS Numeric(5, 0)), 2, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (31, 1, N'Wherever applicable volume forecasting is used to drive resource planning', N'Team Leads have forecasted resource requirements based on inflow volumes and weighted handle times', CAST(29 AS Numeric(5, 0)), 3, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (32, 1, N'Skills matrix is used to drive cross utilization of resources wherever applicable', N'A Skills Matrix should be available for review evidencing regular updates  to reflect the existing resources and known training plans', CAST(30 AS Numeric(5, 0)), 3, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (33, 1, N'Teams measure Capacity Utilisation and can demonstrate improvements every 6 months without negatively impacting SLA performance', N'Review Capacity Utilisation % over an agreed period of time:
- Lean workshop or implementation to remove process waste
- Process automations projects 
- Cross trained resources being levereged for load balancing
- Utilization chart for removing additional headcount ', CAST(31 AS Numeric(5, 0)), 3, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (34, 1, N'Teams understand and measure Equivalent Throughput Yield (ETY) & Capacity Utilisation of their processes to determine optimal headcount required', N'Refer to ETY deck and check for applicability to the process. (ETY is typically applicable for all transaction based processes)', CAST(32 AS Numeric(5, 0)), 3, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (35, 1, N'Capacity planning is completed to calculate actual vs planned inflow and expected per person productivity targets agreed with client ', N'Capacity planning is completed at the agreed frequency to consider volume fluctuations, ie seasonality, and trends on the incoming volumes', CAST(33 AS Numeric(5, 0)), 3, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (36, 1, N'Teams use an effective office layout to organize around the process to reduce waste associated with motion, transportation and wait times', N'Check whether the teams are sitting as close to each other as possible to enhance the process flow / process efficiency (as much as possible given any infrastructure constraints)', CAST(39 AS Numeric(5, 0)), 4, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (37, 1, N'Teams consistently practice 5S to drive improved organization in the office ', N'Check team understanding of the 5S tools, Audits carried out at agreed frequencies and actions identified / updated to drive improvements', CAST(40 AS Numeric(5, 0)), 4, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (38, 1, N'3x3s and Control Charts are used effectively to take informed operational decisions on the production floor', N'Decisions to improve process performance areare made using the available data and trends on the 3x3 / Control Charts', CAST(47 AS Numeric(5, 0)), 5, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (39, 1, N'Productivity, accuracy or general performance data by person is displayed (where possible)', N'Productivity and accuracy targets  / results are displayed on white boards (where applicable) or as per VM Plan ', CAST(48 AS Numeric(5, 0)), 5, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (40, 1, N'Teams understand different types of waste (7 Forms of Waste). Team have a plan to reduce process waste', N'Team should be able to explain the 7 Forms of Waste and have can evidence implemention within their processes, and raised into We@Accenture', CAST(55 AS Numeric(5, 0)), 6, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (41, 1, N'Team uses RCA tools (Pareto, Fishbone etc.) to identify and resolve performance issues', N'Check the teams understanding of the available tools and whether they are documented on the Control Plan and displayed as per the VM Plan', CAST(56 AS Numeric(5, 0)), 6, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (42, 1, N'Teams use Lean Six Sigma tools (Rolled Throughput Yield (RTY), Value Stream Mapping, Lean Workshops, Kaizen etc) to drive end-to-end process / performance improvement projects', N'Check Deal documentation for evidence of RTY, VSM etc for RCA and improvement initiatives / actions', CAST(57 AS Numeric(5, 0)), 6, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (43, 1, N'Team measures RTY and can evidence Year on Year improvement ', N'Review the RTY scores for the team for a rolling 12 month period and chellenge the improvement steps taken and whether the ideas were in We@Accenture', CAST(58 AS Numeric(5, 0)), 6, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (44, 1, N'Teams actively engage in We@Accenture
- 1.2 ideas generated per person (pro rata throughout the financial year)
- 30 % Implementation Rate (rolling 6 month basis)
- All ideas reviewed / validated within 14 days of entering We@Accenture
- 80% of ideas implemented in time
(consider for all ideas submitted from November 2012)', N'Check all We@Accenture metrics for the Deal for all ideas raised from 1st December 2012. Review the We@Accenture plan to drive future innovation and ideas', CAST(59 AS Numeric(5, 0)), 6, 3, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (45, 1, N'Key Accenture Stakeholders (OADM, Global SDL, Service Delivery Lead, OE Lead) agree what needs to be driven as part of the Deal''s GEN4 agenda. Team has reviewed / used the GEN4 Assets to leverage progress', N'a) DE&I Leads have been identified for the Deal (where applicable) and are working with the Deal team to drive progress to GEN4
b) GEN4 Roadmap for each Deal (where applicable)
c) Tracker detailing actions being taken and current progress', CAST(10 AS Numeric(5, 0)), 1, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (46, 1, N'Key Stakeholders review the Deal''s GEN4 agenda at agreed frequencies. Team utilise a global standard MOS (where applicable)', N'a) Check the Global MOS (where applicable)
b) Review evidence of Key Stakeholder meetings
c) Review available Project Plans', CAST(11 AS Numeric(5, 0)), 1, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (47, 1, N'Teams have conducted at least two cycles of Client discussions to drive consistency in approacd and capture the Clients'' dynamic needs', N'Client needs are successfully captured using available GEN4 Assets (VOC, Client NPS etc)', CAST(12 AS Numeric(5, 0)), 1, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (48, 1, N'3x3 reflects the critical Business Outcome Indicators to effectively measure and manage team performance ', N'3x3 should be extended to capture 1-2 BOI''s to drive improvements identified as critical Client focus areas', CAST(13 AS Numeric(5, 0)), 1, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (49, 1, N'Teams have performed internal and external Benchmarking for the scope of service. Team have a documented planto achieve improved levels of performance / outcomes', N'Benchmarking activity completed across the service lines. Deal needs to evidence Improvement Plan to extend beyond the existing Benchmarks', CAST(24 AS Numeric(5, 0)), 2, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (50, 1, N'Teams have mapped a global Service Performance Point of View (PoV) for their service line and have created a plan to improve process performance', N'Review the PoV and check the the Improvement Plan to drive change', CAST(25 AS Numeric(5, 0)), 2, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (51, 1, N'Teams are aware of cross geography SDO performance and Improvement Plans / initiatives. Global standard MoS is available for the Contract Service Line and are using it. ', N'Evidence cross geopraphy communications and process performance reviews in accordance with the Global MOS', CAST(26 AS Numeric(5, 0)), 2, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (52, 1, N'Teams can demonstrate with data that they are resourced optimally to meet the required Service Levels and are meeting areed CCI targets (ie, no excess performance levels). Where excess delivery is a business requirement, the extra costs need to be signed off by the Global / Deal OADM', N'a) Review the available data and challenge how and when resourcing decisions are made
b) Check OADM sign off (where required)', CAST(34 AS Numeric(5, 0)), 3, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (53, 1, N'Teams can demonstrate with data where they have deployed resource sharing between Deals (where Contractually feasible)', N'a) Where available the OPC tool should highlight the cross sharing of the resources within a deal
b) SDL should be able to evidence dates and times where resource was required from another Deal, or where their resources were shared elsewhere ', CAST(35 AS Numeric(5, 0)), 3, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (54, 1, N'Teams are achieving required performance consistently and can demonstrate reductions of standard deviation / process performance variation within the critical business metrics', N'a) Evidence of detailed processing steps (VSM) or activity that has been carried out to identify the Non Value Add elements of the process
b) Statistical analysis to prove improvement in process variation by measuring the baseline and the improved period', CAST(36 AS Numeric(5, 0)), 3, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (55, 1, N'Teams actively participate and contribute within their Capability Action Network to share deployed assets and best practices (OE playbook, POV etc). Teams are organized in such a way that they are able to drive improvements faster and are not re-inventing improvement ideas.', N'a)  Evidence of participation and contribution to the Capability Action Network across the Deal (cross geofraphy where applicable) to capture, replicate and share new ideas, projects and best practices', CAST(41 AS Numeric(5, 0)), 4, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (56, 1, N'Teams can demonstrate how participation / contribution within the Capability Action Network has generated replicated practices and improved their Deal processes. Teams have replicated 3 best practices across Delivery Centres / Contracts (received as well as shared)', N'a) Review evidence of the replicated best practices across all the Delivery Centres  
b) Contribution to the OE playbooks', CAST(42 AS Numeric(5, 0)), 4, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (57, 1, N'Teams showcase their E2E process maps and in flight improvement either on the production floor (Innovation Boards), in Lean Rooms or Innovation Rooms.', N'a) Review the availability of the E2E process maps (in and out of scope service)
b) Review Improvement Plan to capture the initiatives identified within the map', CAST(49 AS Numeric(5, 0)), 5, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (58, 1, N'Teams have deployed BPO Navigator (for select contracts)', N'a) Teams have deployed BPO Navigator to the Client
b) Client uses the data within BPO Navigator to challenge / improve performance levels', CAST(50 AS Numeric(5, 0)), 5, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (59, 1, N'Teams are using "Next Gen" Visual Management to drive performance within their Operation and GEN4 objectives (where feasible)', N'a) "Next Gen" VM budget is agreed and available to make changes
b) Creative use of space used where budget is not available or VM not possible', CAST(51 AS Numeric(5, 0)), 5, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (60, 1, N'Teams have developed and implemented a High Performance Roadmap to drive business benefits for the Client', N'Utilize SPPOV to identify the improvement oppurtunites for critical Client focus areas', CAST(60 AS Numeric(5, 0)), 6, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (61, 1, N'Teams have identified and quantified business value generated through GEN4 deployment with Client agreement and sign off', N'Documented $ value benefit agreement from Client detailed with potential gain share oppurtunites', CAST(61 AS Numeric(5, 0)), 6, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (62, 1, N'Teams have delivered significant and Client recognised $ business benefit through deployment of GEN4 Assets ', N'Documented $ value benefit agreement from Client detailed with potential gain share oppurtunites', CAST(62 AS Numeric(5, 0)), 6, 4, NULL, N'N')
INSERT [dbo].[question] ([question_ID], [quest_ID], [question], [question_guide], [question_display], [mat_cat_ID], [mat_lev_ID], [question_weight], [question_floor_verif]) VALUES (63, 2, N'Holac', N'C', CAST(63 AS Numeric(5, 0)), 6, 5, N'  ', N'Y')
INSERT [dbo].[questionary] ([quest_ID], [quest_type], [quest_desc]) VALUES (1, N'OM Assessment', N'This is a operational maturity test.')
INSERT [dbo].[questionary] ([quest_ID], [quest_type], [quest_desc]) VALUES (2, N'QA Assessment', N'Assessment for qa review')
INSERT [dbo].[questionary] ([quest_ID], [quest_type], [quest_desc]) VALUES (3, N'Mobilizacion', N'quest')
INSERT [dbo].[questionary] ([quest_ID], [quest_type], [quest_desc]) VALUES (4, N'Funciona', N'Buens dias')
INSERT [dbo].[team] ([team_ID], [team_name], [team_localization], [team_region], [team_creation_date], [team_capability], [team_process], [team_focal], [team_contract], [team_client], [team_dm], [team_oe]) VALUES (1, N'Novartis', N'Costa RIca', N'Heredia', CAST(0xD0360B00 AS Date), N'Web Dev', N'Ipads', N'Julio Alpizar', N'NovartisP', N'Novartis Pharma', N'Javier Mendez', N'Jonathan Coto')
INSERT [dbo].[team] ([team_ID], [team_name], [team_localization], [team_region], [team_creation_date], [team_capability], [team_process], [team_focal], [team_contract], [team_client], [team_dm], [team_oe]) VALUES (2, N'Merck', N'Costa Rica', N'Heredia', CAST(0x60380B00 AS Date), N'Software Dev', N'Desktop App', N'Mario Richs', N'Merck S.a', N'Merck Pharma', N'Lukas Mc', N'Stephanie Mc')
INSERT [dbo].[team] ([team_ID], [team_name], [team_localization], [team_region], [team_creation_date], [team_capability], [team_process], [team_focal], [team_contract], [team_client], [team_dm], [team_oe]) VALUES (3, N'Eisai', N'Costa Rica', N'Heredia', CAST(0x84380B00 AS Date), N'Web Dev', N'Sites', N'Lupita Suarez', N'Eisai S.A', N'Eisai Pharma', N'Javier MÃ©ndez', N'Paul Mac')
INSERT [dbo].[user] ([users_name], [user_team], [role_ID], [user_position], [user_status]) VALUES (N'tmcfarlane', N'Novartis', 1, N'Web Dev', N'A')
INSERT [dbo].[user] ([users_name], [user_team], [role_ID], [user_position], [user_status]) VALUES (N'yadigope', N'Eisai', 1, N'Soft Dev', N'I')
INSERT [dbo].[user_role] ([role_ID], [role_name], [role_desc]) VALUES (1, N'SuperAdmin', N'is the  one who has all the power in the system.')
INSERT [dbo].[user_role] ([role_ID], [role_name], [role_desc]) VALUES (2, N'UserAdmin', N'This user is for Opex User, it is allowed to make assessment and see reports')
INSERT [dbo].[user_role] ([role_ID], [role_name], [role_desc]) VALUES (3, N'User', N'This user is allowed to see the overview section and insert the action plans for each assessment.')
ALTER TABLE [dbo].[action_plan]  WITH CHECK ADD  CONSTRAINT [FK_action_plan_assessment] FOREIGN KEY([assessment_ID])
REFERENCES [dbo].[assessment] ([assessment_ID])
GO
ALTER TABLE [dbo].[action_plan] CHECK CONSTRAINT [FK_action_plan_assessment]
GO
ALTER TABLE [dbo].[action_plan]  WITH NOCHECK ADD  CONSTRAINT [FK_action_plan_prioritization] FOREIGN KEY([prioritization_ID])
REFERENCES [dbo].[prioritization] ([prioritization_ID])
GO
ALTER TABLE [dbo].[action_plan] CHECK CONSTRAINT [FK_action_plan_prioritization]
GO
ALTER TABLE [dbo].[assessment]  WITH CHECK ADD  CONSTRAINT [FK_assessment_questionary] FOREIGN KEY([quest_ID])
REFERENCES [dbo].[questionary] ([quest_ID])
GO
ALTER TABLE [dbo].[assessment] CHECK CONSTRAINT [FK_assessment_questionary]
GO
ALTER TABLE [dbo].[assessment]  WITH CHECK ADD  CONSTRAINT [FK_assessment_team] FOREIGN KEY([team_ID])
REFERENCES [dbo].[team] ([team_ID])
GO
ALTER TABLE [dbo].[assessment] CHECK CONSTRAINT [FK_assessment_team]
GO
ALTER TABLE [dbo].[assessment]  WITH CHECK ADD  CONSTRAINT [FK_assessment_user] FOREIGN KEY([user_name])
REFERENCES [dbo].[user] ([users_name])
GO
ALTER TABLE [dbo].[assessment] CHECK CONSTRAINT [FK_assessment_user]
GO
ALTER TABLE [dbo].[assessment_result]  WITH CHECK ADD  CONSTRAINT [FK_assessment_result_assessment] FOREIGN KEY([assessment_ID])
REFERENCES [dbo].[assessment] ([assessment_ID])
GO
ALTER TABLE [dbo].[assessment_result] CHECK CONSTRAINT [FK_assessment_result_assessment]
GO
ALTER TABLE [dbo].[category_result]  WITH CHECK ADD  CONSTRAINT [FK_category_result_assessment_result] FOREIGN KEY([assessment_result_ID])
REFERENCES [dbo].[assessment_result] ([assessment_result_ID])
GO
ALTER TABLE [dbo].[category_result] CHECK CONSTRAINT [FK_category_result_assessment_result]
GO
ALTER TABLE [dbo].[category_result]  WITH CHECK ADD  CONSTRAINT [FK_category_result_maturity_category] FOREIGN KEY([mat_cat_ID])
REFERENCES [dbo].[maturity_category] ([mat_cat_ID])
GO
ALTER TABLE [dbo].[category_result] CHECK CONSTRAINT [FK_category_result_maturity_category]
GO
ALTER TABLE [dbo].[category_result]  WITH CHECK ADD  CONSTRAINT [FK_category_result_maturity_level] FOREIGN KEY([mat_lev_ID])
REFERENCES [dbo].[maturity_level] ([mat_lev_ID])
GO
ALTER TABLE [dbo].[category_result] CHECK CONSTRAINT [FK_category_result_maturity_level]
GO
ALTER TABLE [dbo].[maturity_category]  WITH CHECK ADD  CONSTRAINT [FK_maturity_category_questionary] FOREIGN KEY([quest_ID])
REFERENCES [dbo].[questionary] ([quest_ID])
GO
ALTER TABLE [dbo].[maturity_category] CHECK CONSTRAINT [FK_maturity_category_questionary]
GO
ALTER TABLE [dbo].[maturity_level]  WITH CHECK ADD  CONSTRAINT [FK_maturity_level_questionary] FOREIGN KEY([quest_ID])
REFERENCES [dbo].[questionary] ([quest_ID])
GO
ALTER TABLE [dbo].[maturity_level] CHECK CONSTRAINT [FK_maturity_level_questionary]
GO
ALTER TABLE [dbo].[modification_data]  WITH CHECK ADD  CONSTRAINT [FK_modification_data_assessment] FOREIGN KEY([assessment_ID])
REFERENCES [dbo].[assessment] ([assessment_ID])
GO
ALTER TABLE [dbo].[modification_data] CHECK CONSTRAINT [FK_modification_data_assessment]
GO
ALTER TABLE [dbo].[modification_data]  WITH CHECK ADD  CONSTRAINT [FK_modification_data_user] FOREIGN KEY([user_name])
REFERENCES [dbo].[user] ([users_name])
GO
ALTER TABLE [dbo].[modification_data] CHECK CONSTRAINT [FK_modification_data_user]
GO
ALTER TABLE [dbo].[optionResult]  WITH CHECK ADD  CONSTRAINT [FK_optionResults_question] FOREIGN KEY([question_ID])
REFERENCES [dbo].[question] ([question_ID])
GO
ALTER TABLE [dbo].[optionResult] CHECK CONSTRAINT [FK_optionResults_question]
GO
ALTER TABLE [dbo].[optionResult]  WITH CHECK ADD  CONSTRAINT [FK_optionResults_questionary] FOREIGN KEY([quest_ID])
REFERENCES [dbo].[questionary] ([quest_ID])
GO
ALTER TABLE [dbo].[optionResult] CHECK CONSTRAINT [FK_optionResults_questionary]
GO
ALTER TABLE [dbo].[question]  WITH CHECK ADD  CONSTRAINT [FK_question_maturity_category] FOREIGN KEY([mat_cat_ID])
REFERENCES [dbo].[maturity_category] ([mat_cat_ID])
GO
ALTER TABLE [dbo].[question] CHECK CONSTRAINT [FK_question_maturity_category]
GO
ALTER TABLE [dbo].[question]  WITH CHECK ADD  CONSTRAINT [FK_question_maturity_level] FOREIGN KEY([mat_lev_ID])
REFERENCES [dbo].[maturity_level] ([mat_lev_ID])
GO
ALTER TABLE [dbo].[question] CHECK CONSTRAINT [FK_question_maturity_level]
GO
ALTER TABLE [dbo].[question]  WITH CHECK ADD  CONSTRAINT [FK_question_questionary] FOREIGN KEY([quest_ID])
REFERENCES [dbo].[questionary] ([quest_ID])
GO
ALTER TABLE [dbo].[question] CHECK CONSTRAINT [FK_question_questionary]
GO
ALTER TABLE [dbo].[question_result]  WITH CHECK ADD  CONSTRAINT [FK_question_result_assessment] FOREIGN KEY([assessment_ID])
REFERENCES [dbo].[assessment] ([assessment_ID])
GO
ALTER TABLE [dbo].[question_result] CHECK CONSTRAINT [FK_question_result_assessment]
GO
ALTER TABLE [dbo].[question_result]  WITH CHECK ADD  CONSTRAINT [FK_question_result_question] FOREIGN KEY([question_ID])
REFERENCES [dbo].[question] ([question_ID])
GO
ALTER TABLE [dbo].[question_result] CHECK CONSTRAINT [FK_question_result_question]
GO
ALTER TABLE [dbo].[user]  WITH CHECK ADD  CONSTRAINT [FK_user_user_role] FOREIGN KEY([role_ID])
REFERENCES [dbo].[user_role] ([role_ID])
GO
ALTER TABLE [dbo].[user] CHECK CONSTRAINT [FK_user_user_role]
GO
USE [master]
GO
ALTER DATABASE [CheckPoint] SET  READ_WRITE 
GO
